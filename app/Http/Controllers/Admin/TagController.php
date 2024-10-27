<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TagController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('AdminPanel/Tag/Index', [
            'tags' => Tag::withCount('problems')->latest()
                ->when($request->search ?? false, function ($query, $search) {
                    $query->where('name', 'like', "%$search%");
                })
                ->paginate()
                ->onEachSide(1),
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:tags,name'
        ]);

        Tag::create(['name' => $request->name]);

        return redirect()->route('admin.tags.index')->with('success', 'successfully tag created');
    }


    public function update(Request $request, String $id)
    {

        $request->validate([
            'name' => 'required|string|unique:tags,name,' . $id,
        ]);

        Tag::where('id', $id)->update(['name' => $request->name]);

        return back()->with('success', 'successfully tag updated');
    }



    public function destroy(String $id)
    {

        $tag = Tag::find($id);
        $tag->problems()->detach();
        $tag->delete();

        return back()->with('success', 'successfully tag deleted');
    }
}
