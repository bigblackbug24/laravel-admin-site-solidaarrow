<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB,
    Input;

class usermodel extends Model {

    public function authenticate($name, $password) {

        $where = ['Name' => $name, 'password' => $password,'status'=>'1'];
        $stmt = DB::table('user')->where($where)->get();
        // dd($stmt);
        if ($stmt) {
            return true;
        } else {
            return false;
        }
//print_r(		$stmt->errorInfo ());
        // var_dump($stmt);
        //exit();
    }

    public function alluser() {
        $stmt = DB::select('select * from user');
        return $stmt;
    }

    function markuserAs($id,$value) {
        //$where = ['id','=', $id];
        $stmt =  DB::table('user')->where('id','=',$id)->update(['status' => $value]);
       // var_dump($stmt);
        //exit();
        if ($stmt) {
            //echo '>>>>>>>>>>>>';
            //exit();
            return true;
        } else {
            //echo '<<<<<<<<<<<<<<<<';
            //exit();
            return false;
        }
    }

  /*  public function deleteuser($id) {
        $stmt = DB::table('user')->where('id', '=', $id)->delete();
        if ($stmt) {
            return true;
            ;
        } else {
            return false;
        }
    }
   
   */
    public function adduser()
    {
        $stmt=DB::table('user')->insert(array(
                
                'Name'=>Input::get('name'),
                'Email'=>Input::get('email'),
            'Password'=>Input::get('password'),
            'phone_no'=>Input::get('phone'),
            'Address'=>Input::get('address')));
        
        if($stmt)
        {
            return true;
            
        }
        else
        {
            return false;
        }
    }

}
