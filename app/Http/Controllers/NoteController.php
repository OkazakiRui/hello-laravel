<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateNoteRequest;

use App\Models\Note;

class NoteController extends Controller
{
    public function index(){
        $notes = Note::all();
        return view("notes", ["notes"=>$notes]);
    }
    public function show($noteId){
        // データがない場合は err
        // $note = Note::find($noteId);
        // データがない場合は 404 | not found
        $note = Note::findOrFail($noteId);
        return view("notes_detail", ["note"=>$note]);
    }
    public function new(){
        return view("new_note");
    }
    public function store(CreateNoteRequest $request){
        // title, textを連想配列で取得します
        $params = $request->only("title", "text");
        $created_note = Note::create($params);
        return redirect()->route("notes");
    }
    public function edit($noteId){
        $note = Note::findOrFail($noteId);
        return view("edit_note", ["note" => $note]);
    }
    public function update(CreateNoteRequest $request, $noteId){
        $note = Note::findOrFail($noteId);
        // title, textを連想配列で取得する
        $params = $request->only("title", "text");
        // 取得したNoteインスタンスに送られてきたデータ(title, text)を上書きします。
        $note->fill($params);
        $note->save();
        return redirect()->route("get", ["noteId"=>$noteId]);
    }
    public function delete($noteId){
        $note = Note::findOrFail($noteId);
        $note->delete();
        return redirect()->route("notes");
    }
}
