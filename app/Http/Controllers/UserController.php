<?php

namespace App\Http\Controllers;

use DB,
    Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\usermodel;
use App\config\sessions;
use Session;

class UserController extends Controller {

    function __construct() {

        $this->user = new usermodel;
    }

    public function login() {


        if (!isset($_SESSION['name']) || empty($_SESSION['name'])) {
            //var_dump($_SESSION['email']);
            //exit();
            if (isset($_POST['sub'])) {
                $isAuth = $this->user->authenticate($_POST['name'], $_POST['password']);
//var_dump($isAuth);
//exit();
                if ($isAuth != false) {

                    $_SESSION['name'] = $isAuth['Name'];
                    //$_SESSION['name']  = 'Usman';

                    return redirect('home');
                } else {

                    return view('login');
                }
            }

            return view('login');
        } else {

            return view('home');
        }
    }

    public function home() {
        /*$stmt = DB::select('select * from customer LIMIT 0,5');
        //var_dump($stmt);
        //exit();
        $user = DB::select('select * from user LIMIT 0,5');
        // var_dump($user,$stmt);
        // exit();*/
        return view('home');/*->with('data', $stmt)->with('users', $user);*/
    }

    public function logout() {

        Session::flush();

        return Redirect('login');
    }

    public function get_user() {
        $results = $this->user->alluser();
        //  var_dump('results');
        // exit();
        return view('user')->with('data', $results);
    }

    public function mark_user($action, $id) {
        //dd($action);
        if ($action == 'block') {
            $stmt = $this->user->markuserAs($id, 0);
            // var_dump($stmt);
            //exit();
        } else if ($action == 'unblock') {
            $this->user->markuserAs($id, 1);
        } else if ($action == 'delete') {
            $this->user->deleteuser($id);
        }
        return redirect('user');
        //header("location: ".$this->getUrl('customer'));
    }

    public function adduser() {
        if (isset($_POST['sub'])) {
            $this->user->adduser();

            return redirect('user');
        }
        return view('users.adduser');
    }

}
