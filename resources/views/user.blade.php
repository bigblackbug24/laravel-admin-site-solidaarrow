@extends('layouts.dashboard')
@section('page_heading','User Manegment')

@section('section')
<div class="col-sm-12">
    <div class="row">
        <div class="col-sm-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone #</th>
                        <th>Address</th>
                        <th>status</th>
                        <th>Action </th>
                        
                    
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $index)


                    <tr class="success">
                        <td>{{$index->Name}}</td>
                        <td>{{$index->Email}}</td>
                         <td>{{$index->Phone_no}}</td>
                          <td>{{$index->Address}}</td>
                       <td>{{$index->status}}</td>
            <td>
            	<a href="{{url('mark_user/block').'/'.$index->id}}">Block/</a>
                <a href="{{url('mark_user/unblock').'/'.$index->id}}">Active/</a>
               
                       
                                           </tr>
                    @endforeach


                    </div>

                    </div>




                    @endsection
                    @include('widgets.panel', array('header'=>true, 'as'=>'cotable'))
                    </div>
                    </div>
                    </div>
                    @stop