<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    //
    public function store(REQUEST $request)
    {
        $request->validate([
        'name'=>'required|string|max:30',
        'email'=>'required|email|max:50',
        'subject'=>'nullable|string|max:100',
        'message'=>'nullable|string',
        ]);

        Message::create($request->all());

        return back()->with('success' , 'message send successfully');
    }
    public function adminLogin(Request $request)
   {
      $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {

           if (auth()->user()->role === 'admin') {
              return redirect()->route('admin.messages');
         }
         auth()->logout();
           return back()->withErrors(['email' => 'You are not admin']);
      }

        return back()->withErrors(['email' => 'Invalid admin credentials']);
   }
   public function adminIndex()
   {
    $messages= Message::latest()->get();
    return view('admin.message',compact('messages'));
   }

}
