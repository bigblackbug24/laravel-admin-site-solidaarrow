<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\settingmodel;
use Illuminate\Http\Request;

class SettingController extends Controller {

    private $stmt;

    function __construct() {

        $this->setting = new settingmodel;
    }

    public function get_messages() {
        // $results = $this->setting->getmessages();
        $results = DB::select('select * from contact_us');
        return view('messages')->with('data', $results);
    }

    public function deletemessages($id) {

        $this->setting->delete_message($id);

        return redirect('messages');
    }

    public function reply() {

        return view('reply');
    }

   

    
            
        }
    


