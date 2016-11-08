
@extends ('layouts.plane')
@section ('body')
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <br /><br /><br />
               @section ('login_panel_title','Please Sign In')
               @section ('login_panel_body')
                 <form method="post" action="">
                            <fieldset>
                                
                                <div class="form-group">
                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                                    
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" valu="<?php echo $  ?>" autofocus>
                                </div>
                                <div class="form-group">
                                    <textarea name="msg" class="form-control" placeholder="Enter your Message">
                                        
                                    </textarea>
                                    
                                </div>
                               
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="sub" class="btn btn-lg btn-success btn-block" >
                                
                            </fieldset>
                        </form>
                    
                @endsection
                @include('widgets.panel', array('as'=>'login', 'header'=>true))
            </div>
        </div>
    </div>
@stop

