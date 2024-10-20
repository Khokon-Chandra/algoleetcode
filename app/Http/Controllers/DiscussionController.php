<?php

namespace App\Http\Controllers;

use App\Models\Discussion;
use App\Models\DiscussionType;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DiscussionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $type_slug)
    {
        return Inertia::render('Discuss/Index', [
            'types'        => DiscussionType::all(),
            'selectedType' => $type_slug,
            'discussions'  => Discussion::whereHas('discussionType', function ($query) use ($type_slug) {
                $query->where('slug', $type_slug);
            })
                ->latest()->paginate()
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show($type, $slug)
    {

        return Inertia::render('Discuss/Show', [
            'discussion' => Discussion::with('user')->where('slug', $slug)->first(),
        ]);
    }
}
