<?php

namespace App\Repository\Eloquent;

use App\Model\Contact;
use App\Repository\ContactRepositoryInterface;
use Illuminate\Support\Collection;

class ContactRepository extends BaseRepository implements ContactRepositoryInterface
{

   /**
    * UserRepository constructor.
    *
    * @param Contact $model
    */
   public function __construct(Contact $model)
   {
       parent::__construct($model);
   }
}