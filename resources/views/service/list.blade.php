@extends('layouts.app')

@section('content')
    <div class="container">

        <table class="table">
            		<thead>
                		<tr>
                            <th>ID</th>
                            <th>Title</th>
                			<th>Short description</th>
                            <th>&nbsp;</th>
                		</tr>
                    </thead>
            		<tbody>
            		    @foreach($services as $service)
                			<tr>
                    				<td>#{!! $service->service_id !!}</td>
                    				<td>{!! $service->service_name !!}</td>
                    				<td>{!! $service->short_description !!}</td>
                    				<td><a class="fa fa-pencil" href="{!! url("/admin/service/edit/".$service->service_id) !!}"></a>
                                    </td>
                            </tr>
                        @endforeach
                    </tbody>
        </table>
    </div>
@endsection