<?php

namespace App;

use Input;
use Illuminate\Database\Eloquent\Model;
Use DB;

class productmodel extends Model {

    public function product_list() {

        $stmt = DB::select('select 
            price.price,product.id,product.category_id,product.name,product.created_on,product.created_by,product.updated_by,product.updated_on,product.Asin from product INNER JOIN
				 price where product.id=price.pid ');
        //  var_dump($stmt);
        //exit();
        return $stmt;
    }

    public function add_product() {

        $stmt = DB::table('product')->insertGetId(array(
            'name' => Input::get('name'),
            'created_on' => date("Y-m-d H:i:s"),
            'created_by' => Input::get('cby'),
            'updated_on' => '',
            'updated_by' => '',
        ));
        return $stmt;
        //$lastInsertedId = DB::table('product')->insertGetId();
        //  dd($stmt);
        //exit();

        /*   if ($stmt) {
          return true;
          //  echo'>>>>>>>>';
          //exit();
          } else {
          // echo'<<<<<';
          // exit();
          return false;
          } */
    }

    public function add_price($product_id) {

        $stmt = DB::table('price')->insert(array(
            'price' => Input::get('price'),
            'created_on' => date("Y-m-d H:i:s"),
            'pid' => $product_id
        ));
    }

    public function deleteproduct($id) {
        $stmt = DB::table('product')->where('id', '=', $id)->delete();
        if ($stmt) {

            return true;
        } else {

            return false;
        }
    }

    public function delete_price($id) {

        $stmt = DB::table('price')->where('id', '=', $id)->delete();
        if ($stmt) {
            return true;
        } else {
            return false;
        }
    }

    public function getproduct($id) {
        $stmt = DB::table('product')->where('id', '=', $id)->get();
        //var_dump($stmt);
        //exit();
        return $stmt;
    }

    public function updateproduct($id) {
        $stmt = DB::table('product')->where('id', '=', $id)->update(array(
            'name' => Input::get('name'),
            // 'created_on' => date("Y-m-d H:i:s"),
            'created_by' => '',
            'updated_on' => date("Y-m-d H:i:s"),
            'updated_by' => ''));

        if ($stmt) {
            return true;
        } else {
            return false;
        }
    }

    public function update_price($id) {
        $stmt = DB::table('price')->where('id', '=', $id)->update(array(
            'price' => Input::get('price'),
            // 'created_on' => date("Y-m-d H:i:s"),
            // 'created_by'=>'',
            'pid' => '11'
        ));
    }

}
