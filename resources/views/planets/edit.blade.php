@extends('layouts.main')
@section('title', '惑星情報修正')
@section('content')
    <h1>惑星情報修正</h1>


    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('planets.update', $planet) }}" method="post">
        @csrf
        @method('patch')
        <div class="columns2">
            <label for="japanese_name">名前</label>
            <input type="text" name="japanese_name" id="japanese_name" value="{{ old("japanese_name", $planet->japanese_name) }}">
        </div>
        <div class="columns2">
            <label for="english_name">名前(英語)</label>
            <input type="text" name="english_name" id="english_name" value="{{ old("english_name", $planet->english_name) }}">
        </div>
        <div class="columns2">
            <label for="radius">半径</label>
            <input type="text" name="radius" id="radius" value="{{ old("radius", $planet->radius) }}">
        </div>
        <div class="columns2">
            <label for="weight">重量</label>
            <input type="text" name="weight" id="weight" value="{{ old("weight", $planet->weight) }}">
        </div>
        <div>
            <input type="submit" value="更新">
        </div>
    </form>


    <a href="{{ route('planets.show', $planet) }}">戻る</a>
@endsection
