<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


use App\Http\Resources\Ticket as TicketResource;

use App\Repository\TicketRepositoryInterface;

class TicketController extends Controller
{
    private $ticketRepo;
    public function __construct(TicketRepositoryInterface $ticketRepo )
    {
        $this->ticketRepo = $ticketRepo;
    }
    //
    public function getList(Request $request) {
        $data = $request->all();

        $result = $this->ticketRepo->getList($data);
        $data =  TicketResource::collection($result);
        return $this->returnSucess($data);          
    }
}
