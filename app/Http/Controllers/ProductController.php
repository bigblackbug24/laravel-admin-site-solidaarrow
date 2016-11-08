<?php

namespace App\Http\Controllers;
use App\productmodel;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller {

    //
    function __construct() {
        $this->product = new productmodel;
    }

    public function product_list() {
        $data = $this->product->product_list();
      //var_dump('$data');
        //exit();
        return view('products.product-list')->with('products', $data);
    }
    
    public function addproduct()
    {
        if(isset($_POST['sub']))
        {
         $product_id=$this->product->add_product();
        //dd('$stmt');
          // exit();
         $data=$this->product->add_price($product_id);
            return redirect('product-list');
        }   
        
        return view('products.add-product');
        
        
    }
    public function delete_product($id)
    {
        $this->product->deleteproduct($id);
        $this->product->delete_price($id);
        
        return redirect('product-list');
        
        
    }
    public function update_product($id)
    {
        if(isset($_POST['sub']))
        {
            $this->product->updateproduct($id);
            
                
           $data= $this->product->update_price($id);
            
           // var_dump('$data');
            //exit();
            return redirect('product-list');
            
        }
        $this->product->getproduct($id);
       // var_dump('$stmt');
       // exit();
        return view('products.update-product')->with('products',$stmt);
    }

}
