@extends('layout')

@section('content')
    <h1>{{$shop->name}}を編集する</h1>
    {{ Form::model($shop,['route' => ['shop.update', $shop->id]]) }}
    <div class='form-group'>
        {{Form::label('name', '店名')}}
        {{Form::text('name', null)}}
    </div>
    <div class='form-group'>
        {{Form::label('address', '住所')}}
        {{Form::text('address', null)}}
    </div>
    <div class='form-group'>
        {{Form::label('category_id', 'カテゴリ')}}
        {{Form::text('category_id', $categories)}}<!--カテゴリ変数をプルダウンリストに格納-->
    </div>
    <div class='form-group'>
        {{Form::submit('更新する', ['class' => 'btn btn-primary'])}}
    </div>
    {{Form::close()}}

    <div>
        <a href={{route('shop.list')}}>一覧に戻る</a>
    </div>
@endsection