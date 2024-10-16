<?php

namespace App\Http\Controllers;

use App\Models\Company;
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

        $problems = Problem::with(['tags' => function ($query) {
            $query->limit(3);
        }])
            ->withCount('tags')
            ->when($request->tags ?? false, function ($query, $tags) {
                $query->whereHas('tags', function ($query) use ($tags) {
                    $query->whereIn('slug', explode(',', $tags));
                });
            })

            ->when($request->topic ?? false, function ($query, $topic) {
                if ($topic == 'all') return;
                $query->whereHas('topic', function ($query) use ($topic) {
                    $query->where('slug', $topic);
                });
            })

            ->when($request->difficulty ?? false, function ($query, $difficulty) {
                $query->where('difficulty', $difficulty);
            })

            ->when($request->search ?? false, function ($query, $search) {
                $query->where("title", "like", "%$search%");
            })

            ->paginate($request->range ?? 10)
            ->withQueryString()
            ->onEachSide(1);


        return Inertia::render('Problem/Index', [
            'filters'  => $request->all(),
            'tags'     => Tag::withCount('problems')->get(),
            'topics'   => Topic::all(),
            'companies' => Company::withCount('problems')->get(),
            'problems' => $problems,
        ]);
    }



    public function pickOne()
    {
        $problem = Problem::inRandomOrder()->first();

        return redirect()->route('problems.show', $problem->slug);
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
