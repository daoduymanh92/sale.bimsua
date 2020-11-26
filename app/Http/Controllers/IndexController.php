<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AddressService as AddressService;
class IndexController extends Controller
{
    public function home()
    {
        return view('app');
    }

    public function test() {
        $addressService = new AddressService;
        $data = $addressService->getList();
        return $this->returnSucess($data);     
    }
}
