
@extends('layouts.dashboard')
@section('page_heading','messages')

@section('section')
<div class="col-sm-12">


    <div class="row">
        <div class="col-sm-12">
            @section ('cotable_panel_title','Coloured Table')
            @section ('cotable_panel_body')
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th> Action </th>
                        <th>
                    </tr>
                </thead>
                <tbody>

                    <!--print_r($data); exit();-->

                    @foreach ($data as $index)

                    <tr class = "info">
                        <td>{{$index->Name}}</td>
                        <td>{{$index->Email}}</td>
                        <td>{{$index->Message}}</td>
                        <td> <a href="{{url('deletemessage').'/'.$index->id}}">Delete</a>/<a href="{{url('reply').'/'.$index->id}}">Reply</a></td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
            @endsection
            @include('widgets.panel', array('header' => true, 'as' => 'cotable'))
        </div>
    </div>
</div>
@stop