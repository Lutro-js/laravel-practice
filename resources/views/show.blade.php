@extends('layout')

@section('content')
    <h1>{{$shop->name}}</h1>
    <div>
        <p>{{$shop->category->name}}</p>
        <p>{{$shop->address}}</p>
    </div>

    <i frame id='map'
        src='https://www.google.co.jp/mapsAIzaSyAd5PeUhlKPM1nh3r6vXIa6KChj0vw8RIQ{{ $shop->address }}'
        width='100%'
        height='320'
        frameborder='0'>
    </i frame>

    <div>
        <a href={{route('shop.list')}}>一覧に戻る</a>
        | <a href={{ route('shop.edit', ['id' => $shop->id]) }}>編集</a>
        <p></p>
        {{ Form::open(['method' => 'delete', 'route' => ['shop.destory', $shop->id]]) }}
            {{ Form::submit('削除', ['class' => 'btn btn-outline-danger']) }}
        {{ Form::close() }}
    </div> 
@endsection