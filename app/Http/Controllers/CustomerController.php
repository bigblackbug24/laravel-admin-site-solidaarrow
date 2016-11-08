<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\customermodel;

use Illuminate\Http\Request;

class CustomerController extends Controller {
    function __construct() {
        $this->customer=new customermodel;
    }
    public function get_customer()
    {
        
        $results=$this->customer->allcustomer();
       // var_dump('results');
       // exit();
        return view('table')->with('data',$results);
        
    }
  /*  public function mark_customer($action,$customer){
		
		if(isset($_SESSION['email']) && !empty($_SESSION['email']))
		{
			if($action == 'block'){
				$this->customer->markCustomerAs($customer, 0);
			} else if($action == 'unblock') {
				$this->customer->markCustomerAs($customer, 1);
			} else if($action == 'delete') {
				$this->customer->deleteCustomer($customer);
			}
                        return view('table');
			//header("location: ".$this->getUrl('customer'));
		}
		else
		{
			return  view('login');
		}	
	}
*/
}
