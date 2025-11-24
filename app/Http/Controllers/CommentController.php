<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{   
    public function index() {
    $comments = Comment::latest()->get();
    return view('index', compact('comments'));
   }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:255',
            'comment'=>'required|string',
            'image'=>'nullable|image|max:2048',
        ]);

        $imageName=null;

        if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('/comments'), $imageName);
        }

        Comment::create([
            'name' => $request->name,
            'comment' => $request->comment,
            'image' => $imageName,
        ]);

           return redirect()->route('index')->with('success', 'Comment added successfully!'); // back to index page
    }

}
