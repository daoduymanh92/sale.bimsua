<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Services\AddressService as AddressService;

use App\Http\Resources\Ticket as TicketResource;


class AddressController extends Controller
{
    public function __construct()
    {
    }
    //
    public function getList(Request $request) {  
        $addressService = new AddressService;
        $data = $addressService->getList();
        return $this->returnSucess($data);       
    }
}
