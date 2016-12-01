@extends('layouts.app')

@section('content')
    <div class="container search-page">
        <div class="wrapper col-lg-12">
            <div class="col-sm-8 col-xs-8">
                <div class="form-group">
                    <input class="form-control search-input" placeholder="Enter title">
                </div>
            </div>
            <div class="col-sm-4 col-xs-8">
                <button class="btn btn-success search-btn">Search</button>
            </div>
        </div>
        <div class="clear-both" style="clear: both"></div>
        <div class="wrapper col-lg-12">
            <div class="row">
                <table class="table">
                    <thead>
                        <th>Poster</th>
                        <th>Title</th>
                        <th>Genre</th>
                        <th>Year</th>
                    </thead>
                    <tbody class="table-append">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
