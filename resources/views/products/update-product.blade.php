@extends('layouts.dashboard')
@section('page_heading','Update product')

@section('section')
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <br /><br /><br />
               @section ('login_panel_title','Update product')
               @section ('login_panel_body')
                 <form role="form" method="post">
                            <fieldset>
                                <div class="form-group">
                                 <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                    <input class="form-control" placeholder="Product Name" name="name" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Category_id" name="cid" type="text" value="">
                                </div>
                               <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Price" name="price"  value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="created-by" name="cby" type="text" value="">
                                </div>
                               <div class="form-group">
                                    <input class="form-control" placeholder="updated-by" name="uby" type="text" value="">
                                </div>
                           <!--     <div class="form-group">
                                    <input class="form-control" placeholder="updated-on" name="uon" type="datetime" value="">
                                </div> -->
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="sub"  class="btn btn-lg btn-success btn-block" value="Update product"> 
                              
                            </fieldset>
                        </form>
                    
                    
                @endsection
                @include('widgets.panel', array('as'=>'login', 'header'=>true))
            </div>
        </div>
    </div>
@stop