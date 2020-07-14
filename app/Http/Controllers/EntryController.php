<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function create()
    {
        return view('entries/create');
    }

    public function store(Request $request)
    {
      // dd($request->all());

        $validateData = $request -> validate([
            'title' => 'required|min:7|max:210|unique:entries',
            'content' => 'required|min:25|max:3000'
        ]);

        $entry = new Entry();
        $entry->title = $validateData['title'];
        $entry->content = $validateData['content'];
        $entry->user_id = auth()->id();
        $entry->save();

        $status = 'Su entrada a sido publicada con exito!';
        return back()->with(compact('status'));

    }
}
