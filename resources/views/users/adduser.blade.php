@extends('layouts.dashboard')
@section('page_heading','Add User')

@section('section')
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <br /><br /><br />
               @section ('login_panel_title','Add user')
               @section ('login_panel_body')
               <form role="form" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                    <input class="form-control" placeholder="Username" name="name" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" name="email" type="email" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Phone_no" name="phone" type="text" required pattern="[0-9]{4}-[0-9]{7}"value="">
                                </div>
                               <div class="form-group">
                                    <input class="form-control" placeholder="Address" name="address" type="text" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="sub"  class="btn btn-lg btn-success btn-block" value="ADD User"> 
                              
                            </fieldset>
                        </form>
                    
                @endsection
                @include('widgets.panel', array('as'=>'login', 'header'=>true))
            </div>
        </div>
    </div>
@stop