@extends('layouts.dashboard')
@section('page_heading','product list')

@section('section')

<div class="col-sm-12">
    <div class="row">
        <div class="col-sm-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Product_id</th>
                        <th>Name</th>
                        <td>Price</td>
                        <th>category_id</th>
                        <th>Created-on</th>
                        <th>Created-by</th>
                        <th>updated-on </th>
                        <th>updated-by </th>
                        <th>Asin</th>
                        <th>Action</th>
                       

                    </tr>
                </thead>
                <tbody>

                    @foreach($products as $index)
                    <tr>
                        <td>{{$index->id}}</td>
                        <td>{{$index->name}}</td>
                        <td>{{$index->price}}</td>
                        <td>{{$index->category_id}}</td>
                        
                        <td>{{$index->created_on}}</td>
                        <td>{{$index->created_by}}</td>
                        <td>{{$index->updated_by}}</td>
                        <td>{{$index->updated_on}}</td>
                        <td>{{$index->Asin}}</td>
                        <td><a href="{{url('update-product').'/'.$index->id}}">Update</a>
 /<a href="{{url('delete_product').'/'.$index->id}}">Delete</a>
                        </td>                          
                    </tr>

                    @endforeach
            </table>
            </tbody>
            @endsection
            @include('widgets.panel', array('header'=>true, 'as'=>'cotable'))
        </div>
    </div>
</div>


@stop