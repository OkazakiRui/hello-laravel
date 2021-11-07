@extends('layout.app')

@section('title')
  メモを一覧
@endsection
    
@section('content')
  <h3>メモ一覧</h3>
  <ul>
    @foreach ($notes as $note)
      <li>
        {{-- 詳細画面のリンクを設定する --}}
        <a href="{{route('get', [ 'noteId' => $note->id ])}}">
          {{-- タイトルを表示 --}}
          {{ $note->title }}
        </a>
      </li>
    @endforeach
  </ul>
  <a href="{{route('notes.new')}}">新規作成</a>
@endsection
