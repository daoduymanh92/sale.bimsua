<?php

namespace App\Services;
use Illuminate\Support\Facades\Http;

class AddressService 
{

   /**
    * UserRepository constructor.
    *
    * @param  $model
    */
   public function __construct()
   {
      
   }
    public function getList() {
        $response = Http::get('https://khachhang.giaohangtietkiem.vn/khach-hang/services/list-dia-chi');
        if($response->status() == 200) {
            return $response->json();
        } else {
            return false;
        }
    }
}