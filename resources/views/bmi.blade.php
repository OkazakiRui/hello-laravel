@extends('layout.app')

@section('title')
  BMIを測定
@endsection

@section('content')
  <form action="{{ route("bmi.store") }}" method="post">
    @csrf
    <div>
      身長: <input type="text" name="height" /> cm
    </div>
    <div>
      体重: <input type="text" name="weight" /> kg
    </div>
    <button type="submit">送信</button>
  </form>
  @if (session("bmi"))
    <h3>あなたのBMIは {{ session("bmi") }} です！</h3>
  @endif
@endsection