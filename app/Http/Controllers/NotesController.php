<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Note;
use App\Card;

class NotesController extends Controller
{
    public function store(Request $request, Card $card){
       // return $card;
        //$note = new Note;
        //$note->body = $request->body;
        //$card->notes()->save($note);
        $card->addNote(
            new Note($request->all())
        );
        return back();
    }
    
    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }
    
    public function update(Request $request, Note $note);
    {
        $note->update($request->all());
        
        return back();
    }

}
