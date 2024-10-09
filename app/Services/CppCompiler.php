<?php

namespace App\Services;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;


class CppCompiler
{
    public function execute($code)
    {
        // Store the code in a temporary file
        $cppFilePath = storage_path('app/temp_code.cpp');
        file_put_contents($cppFilePath, $code);

        // Compile and run the C++ code
        $compileCommand = "g++ {$cppFilePath} -o " . storage_path('app/temp_code.out');
        $runCommand = storage_path('app/temp_code.out');

        // Compile the code
        $process = new Process(explode(' ', $compileCommand));
        $process->run();

        // Check if there was a compilation error
        if (!$process->isSuccessful()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Compilation failed',
                'output' => $process->getErrorOutput(),
            ], 400);
        }

        // Run the compiled executable and capture the output
        $process = new Process([$runCommand]);
        $process->run();

        // Return the output of the execution
        if ($process->isSuccessful()) {
            return response()->json([
                'status' => 'success',
                'output' => $process->getOutput(),
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Execution failed',
                'output' => $process->getErrorOutput(),
            ], 400);
        }
    }
}