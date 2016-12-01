@extends('layouts.app')

@section('content')
    <div class="container">
        {!! Form::open(['method' => 'post', 'url' => 'admin/service/update/'.$service->service_id]) !!}
        <h2>Edit Service #{!! $service->service_id !!}</h2>

        @if(count($errors->all()) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $message)
                    {!! $message !!} <br>
                @endforeach
            </div>
        @endif

        <div class="form-group">
            <label for="name">Service name</label>
            <input id="name" type="text" class="form-control" value="{!! $service->service_name !!}" name="service_name" />
        </div>

        <div class="form-group">
            <label for="short-desc">Short description</label>
            <input id="short-desc" type="text" class="form-control" value="{!! $service->short_description !!}" name="service_short_desc" />
        </div>

        <div class="form-group">
            <label for="desc">Description</label>
            <textarea id="desc" class="form-control" name="service_desc" >{!! $service->description !!}"</textarea>
        </div>

        <input type="submit" id="save" class="btn btn-success" />

        {!! Form::close() !!}
    </div>
@endsection

