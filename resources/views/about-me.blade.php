@extends('base')

@section('title')
    {{$title}}
@endsection

@section('link')
    <a href="/">Blog</a>
    <a href="/posts">Posts</a>
@endsection

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <h1>About me</h1>
        </div>
        <div class="col-xs-6">
            <p>{{$text}}</p>
        </div>
        <div class="col-xs-6">
            <p>{{$text2}}</p>
        </div>
        <div class="col-xs-6">
            <p>{{$text3}}</p>
        </div>
    </div>
@endsection