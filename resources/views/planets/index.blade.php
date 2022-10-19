@extends('layouts.main')
@section('title', '惑星一覧')
@section('content')
    <h1>惑星一覧</h1>

    <table border="1">
        <tr>
            @php
                $columns=['名前','名前(英語)','半径','重量',]    
            @endphp
            @foreach ($columns as $column)
                <th>{{$column}}</th>
            @endforeach
                <th></th>
                <th></th>
                <th></th>
        </tr>
        @foreach ($planets as $planet)
            <tr>
                <th class="columns">{{ $planet->japanese_name }}</th>
                <th class="columns">{{ $planet->english_name }}</th>
                <th class="columns">{{ $planet->radius }}</th>
                <th class="columns">{{ $planet->weight}}</th>
                <th class="columns"><a href="{{ route('planets.show', $planet) }}">詳細</a></th>
                <th class="columns"><a href="{{ route('planets.edit', $planet) }}">編集</a></th>
                <th>
                    <form action="{{ route('planets.destroy', $planet) }}" method="post" name="form1" style="display: inline">
                        @csrf
                        @method('delete')
                        <button type="submit" onclick="if(!confirm('削除していいですか?')){return false}">削除する</button>
                    </form>
                </th>
            </tr>
        @endforeach
    </table>

    <a href="{{ route('planets.create') }}">新規登録</a>
@endsection
