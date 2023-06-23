@extends('layout')

@section('content')
    <h1>新しいお店</h1>
        {{Form::open(['route' => 'shop.store'])}}
        <div class='form-group'>
            {{Form::label('name', '店名:')}}
            {{Form::text('name', null)}}
        </div>
        <div class='form-group'>
            {{Form::label('address', '住所:')}}
            {{Form::text('address', null)}}
        </div>
        <div class='form-group'>
            {{Form::label('category_id', 'カテゴリ:')}}
            {{Form::select('category_id', $categories)}}<!--カテゴリ変数をプルダウンリストに格納-->
        </div>
        <div class='form-group'>
            {{ Form::submit('作成する', ['class' => 'btn btn-primary']) }}
        </div>
    {{Form::close()}}

    <div>
        <a href={{ route('shop.list') }}>一覧に戻る</a>
    </div>
@endsection