@extends('layouts.main')
@section('title', '惑星情報登録')
@section('content')
    <h1>惑星情報登録</h1>

    <form action="{{ route('planets.store') }}" method="post">
        @csrf
        <div class="columns2">
            <label for="japanese_name">名前</label>
            <input type="text" name="japanese_name" id="japanese_name" value="{{ old('japanese_name') }}">
        </div>
        <div class="columns2">
            <label for="english_name">名前(英語)</label>
            <input type="text" name="english_name" id="english_name" value="{{ old('english_name') }}">
        </div>
        <div class="columns2">
            <label for="radius">半径</label>
            <input type="text" name="radius" id="radius" value="{{ old('radius') }}">
        </div>
        <div class="columns2">
            <label for="weight">重量</label>
            <input type="text" name="weight" id="weight" value="{{ old('weight') }}">
        </div>
        <div>
            <input type="submit" value="登録">
        </div>
    </form>
    
    <a href="{{ route('planets.index') }}">戻る</a>
@endsection
