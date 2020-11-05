<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Model\Order as OrderModel; 

class Order extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'phone' => $this->phone,
            'gender' => OrderModel::$genderText[$this->gender],
            'address' => $this->address,
            'payment_method' => OrderModel::$methodText[$this->payment_method],
            'delevery_status' => OrderModel::$deliveryText[$this->delevery_status],
            'information' => $this->information,
            'total' => $this->total,
            'facebook' => $this->facebook,
            'note' => $this->note,
            'order_by' => $this->order_by,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
