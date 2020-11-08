<?php

namespace App\Repository\Eloquent;

use App\Model\Ticket;
use App\Repository\TicketRepositoryInterface;
use Illuminate\Support\Collection;

use Carbon\Carbon;

class TicketRepository extends BaseRepository implements TicketRepositoryInterface
{

   /**
    * UserRepository constructor.
    *
    * @param Ticket $model
    */
   public function __construct(Ticket $model)
   {
       parent::__construct($model);

   }

    public function getList($data) {
        $now = Carbon::now()->toDateTimeString();
        return $this->model->orderBy('created_at', 'DESC')
                            ->where('notification_date', '<', $now)
                            ->where($data)
                            ->with('contact')
                            ->get();
    }
}