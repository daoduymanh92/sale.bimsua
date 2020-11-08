<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Http\Resources\Order as OrderResource;

use App\Repository\OrderRepositoryInterface;
use App\Repository\ContactRepositoryInterface;
use App\Repository\TicketRepositoryInterface;

class OrderController extends Controller
{
    private $repository;
    private $contactRepo;
    private $ticketRepo;
    public function __construct(OrderRepositoryInterface $repository, ContactRepositoryInterface  $contactRepo, TicketRepositoryInterface $ticketRepo )
    {
        $this->repository = $repository;
        $this->contactRepo = $contactRepo;
        $this->ticketRepo = $ticketRepo;
    }
    //
    public function getList(Request $request) {
        $data = $request->all();
        $result = $this->repository->getList($data);
        $data =  OrderResource::collection($result);
        return $this->returnSucess($data);          
    }

    public function postOrder(Request $request) {
        $validatedData = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required|numeric',
        ]);
        if($validatedData->fails()) {
            $errors = $validatedData->errors()->all();
            return $this->returnError($errors);  
        }
        $data = $request->all();
        // create or update contact
        $phone = $request->phone;
        $this->contactRepo->createOrUpdate($phone, $data);

        // create order
        $order_type = $request->order_type;
        if($order_type == 0) {
        $rerult = $this->repository->create($data);
        }
        
        // create ticket
        $test = $this->ticketRepo->create($data);
        return $this->returnSucess($rerult);     
    }

    public function updateOrder($id, Request $request) {
        $data = $request->all();
        $rerult = $this->repository->update($id, $data);
        return $this->returnSucess($rerult);  
    }
}
