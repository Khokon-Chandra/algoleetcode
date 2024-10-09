<?php

namespace App\Http\Controllers;

use App\Models\Problem;
use App\Models\Tag;
use App\Models\Topic;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Services\CppCompiler;

class ProblemController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('Problem/Index', [
            'filters' => $request->all(),
            'tags' => Tag::all(),
            'topics' => Topic::all(),
            'problems' => Problem::with('tags')->paginate($request->range ?? 20)->onEachSide(1),
        ]);
    }


    public function show(Request $request, $slug)
    {
        return Inertia::render('Problem/Show', [
            'filters' => $request->all(),
            'problem' => [],
            'slug' => $slug
        ]);
    }

    public function submissions(Request $request, $slug)
    {
        return Inertia::render('Problem/Show', [
            'filters' => $request->all(),
            'problem' => [],
            'submissions' => [],
            'slug' => $slug
        ]);
    }


    public function run(Request $request, $slug)
    {
        return app(CppCompiler::class)->execute($request->code);
    }
}
