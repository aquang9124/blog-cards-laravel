<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Card;
use App\Http\Requests;

class NotesController extends Controller
{
	public function store(Request $request, Card $card) 
	{
		$this->validate($request, [
			'body' => 'required|min:10',
		]);

		$note = new Note($request->all());
		$note->user_id = 1;
		$card->addNote($note);

		return back();	
	}

	public function show(Card $card) 
	{
		$notes = Note::all();
		return view('notes.show', compact('notes', 'card'));	
	}

	public function edit(Note $note, Card $card) 
	{
		return view('notes.edit', compact('note', 'card'));	
	}

	public function update(Request $request, Note $note) 
	{
		$note->update($request->all());

		return back();
	}
}
