@extends('base')

@section('title')
    {{$title}}
@endsection

@section('link')
    <a href="/">Blog</a>
    <a href="/about-me">About me</a>
@endsection

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <h1>Posts</h1>
        </div>
        <form class="form-inline" action="/posts">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="user" placeholder="Enter your name:" id="name">
            </div>
            <br>
            <div class="form-group">
                <label for="post">Text for post:</label>
                <input type="text" name="post" placeholder="Enter your experience" id="post">
            </div>
            <br>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="Enter your email:" id="email">
            </div>
            <br>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Enter your experience" id="password">
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </form>
        <div class="col-xs-6">
            <p>{{$post}}</p>
        </div>
        <div class="col-xs-6">
            <p>{{$drek}}</p>
        </div>
        <div class="col-xs-6">
            @foreach($users as $user)
            <ul>
                <li>{{ $user -> name }}</li>
                <li>{{ $user -> role_id }}</li>
                <li>{{ $user -> email }}</li>
            </ul>
            @endforeach
        </div>
    </div>
@endsection