@extends('layout.app')

@section('title')
  メモを作成
@endsection
    
@section('content')
  <form action="{{route('notes.create')}}" method="post">
    @csrf
    <div>
      タイトル: <input type="text" name="title" value="{{old('title')}}">
      @error('title')
        <p>{{$message}}</p>
      @enderror
    </div>
    <div>
      本文: <textarea type="text" name="text">
        {{old('text')}}
      </textarea>
      @error('text')
        <p>{{$message}}</p>
      @enderror
    </div>
    <input type="submit" value="作成">
  </form>
@endsection