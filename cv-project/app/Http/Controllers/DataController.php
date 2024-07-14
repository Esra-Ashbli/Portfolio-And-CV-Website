<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $id=Message::all();
        return view('messages.index',['message'=>$id]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = new Message();
        $message->name = $request->input('Name');
        $message->email = $request->input('Email');
        $message->message = $request->input('Message');
        $message->save();
        return redirect()->route('messages.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $message = Message::findOrFail($id);
        return view('messages.show',['message'=>$message]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $message = Message::findOrFail($id);
        return view('messages.edit',['message'=>$message]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $message = Message::findOrFail($id);
        $message->name = $request->input('Name');
        $message->email = $request->input('Email');
        $message->message = $request->input('Message');
        $message->save();
        return redirect()->route('messages.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $message = Message::findOrFail($id);
        $message->delete();
        return redirect()->route('messages.index');
    }
}
