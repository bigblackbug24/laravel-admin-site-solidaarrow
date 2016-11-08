<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB,Input;
class customermodel extends Model {

	public function allcustomer()
        {
            $stmt=DB::select('select * from customer');
            
           // print_r($stmt);
           // exit();
            return $stmt;
        }
      /*  function markCustomerAs($id){

		$stmt=DB::table('customer')->where('id','=',$id)->update();
		
		return $stmt;
	}
*/
}
