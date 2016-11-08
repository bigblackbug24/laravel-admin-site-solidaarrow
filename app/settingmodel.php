<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB,
    Input;

class settingmodel extends Model {

    private $stmt;

    public function getmessages() {

        $stmt = DB::select('select * from contact_us');
        // var_dump($stmt);
        // exit();
    }

    public function delete_message($id) {
        $stmt = DB::table('contact_us')->where('id', '=', $id)->delete();
        if ($stmt) {

            return true;
        } else {
            return false;
        }
    }

   

    //
}
