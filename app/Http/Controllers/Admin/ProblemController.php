<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Problem;
use App\Models\Tag;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class ProblemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return Inertia::render('AdminPanel/Problem/Index', [
            'page'   => $request->page,
            'problems' => Problem::with('topic')->latest()->when($request->search ?? false, function ($query, $search) {
                $query->where('title', 'like', "%$search%");
            })->paginate()
                ->withQueryString()
                ->onEachSide(1),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('AdminPanel/Problem/Create', [
            'topics' => Topic::all(),
            'tags'   => Tag::all(),
            'companies' => Company::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:5|max:150',
            'description' => 'required|string|min:100|max:2000',
            'topic' => 'required|exists:topics,id',
            'difficulty' => 'required|string|in:easy,medium,hard',
            'examples' => 'array|min:1',
            'examples.*.input' => 'required|string',
            'examples.*.output' => 'required|string',
            'constraints' => 'array|min:1',
            'constraints.*.value' => 'required|string',
            'tags' => 'array|min:1',
            'tags.*' => 'required|exists:tags,id',
        ]);

        try {
            DB::beginTransaction();

            $problem = Problem::create([
                'title'       => $request->title,
                'description' => $request->description,
                'topic_id'    => $request->topic,
                'difficulty'  => $request->difficulty,
                'examples'    => $request->examples,
                'constraints' => $request->constraints,
            ]);

            $problem->tags()->attach($request->tags);

            DB::commit();

            return redirect()->route('admin.problems.index')->with('success', 'successfully problem created');
        } catch (\Exception $error) {
            DB::rollBack();
            return back()->withErrors('error', $error->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return Inertia::render('AdminPanel/Problem/Edit', [
            'problem'   => Problem::with('tags')->findOrFail($id),
            'topics'    => Topic::all(),
            'tags'      => Tag::all(),
            'companies' => Company::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Problem $problem)
    {
        $request->validate([
            'title' => 'required|string|min:5|max:150',
            'description' => 'required|string|min:100|max:2000',
            'topic' => 'required|exists:topics,id',
            'difficulty' => 'required|string|in:easy,medium,hard',
            'examples' => 'array|min:1',
            'examples.*.input' => 'required|string',
            'examples.*.output' => 'required|string',
            'constraints' => 'array|min:1',
            'constraints.*.value' => 'required|string',
            'tags' => 'array|min:1',
            'tags.*' => 'required|exists:tags,id',
        ]);

        try {
            DB::beginTransaction();

            $problem->update([
                'title'       => $request->title,
                'description' => $request->description,
                'topic_id'    => $request->topic,
                'difficulty'  => $request->difficulty,
                'examples'    => $request->examples,
                'constraints' => $request->constraints,
            ]);

            $problem->tags()->sync($request->tags);

            DB::commit();

            return back()->with("success", "Successfully problem updated");
        } catch (\Exception $error) {
            DB::rollBack();
            return back()->with('error', $error->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            DB::beginTransaction();
            $problem = Problem::with('tags', 'companies')->find($id);

            $problem->tags()->detach();
            $problem->companies()->detach();

            $problem->delete();

            DB::commit();

            return back()->with("success", "Successfully problem deleted");
        } catch (\Exception $error) {
            DB::rollBack();
            return $error->getMessage();
        }
    }
}
