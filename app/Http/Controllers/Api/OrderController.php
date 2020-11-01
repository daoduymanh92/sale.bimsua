<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\Order as OrderResource;

use App\Repository\OrderRepositoryInterface;

class OrderController extends Controller
{
    private $repository;
    public function __construct(OrderRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    //
    public function getList() {
        $result = $this->repository->getList();
        $data =  OrderResource::collection($result);
        return $this->returnSucess($data);          
    }

    public function postOrder(Request $request) {
        $data = $request->all();
        $rerult = $this->repository->create($data);
        return $this->returnSucess($rerult);     
    }
}
