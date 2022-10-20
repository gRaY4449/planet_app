@extends('layouts.main')
@section('title', '惑星情報')
@section('content')

    <h3>名前：{{ $planet->japanese_name }}</h3>
    <h3>名前(英語)：{{ $planet->english_name }}</h3>
    <h3>半径：{{ $planet->radius }}</h3>
    <h3>重量：{{ $planet->weight }}</h3>

    <a href="{{ route('planets.index') }}">戻る</a>
    
@endsection
