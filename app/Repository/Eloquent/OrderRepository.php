<?php

namespace App\Repository\Eloquent;

use App\Model\Order;
use App\Repository\OrderRepositoryInterface;
use Illuminate\Support\Collection;

class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{

   /**
    * UserRepository constructor.
    *
    * @param Order $model
    */
   public function __construct(Order $model)
   {
       parent::__construct($model);
   }
}