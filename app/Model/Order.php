<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'orders';

    const COD_METHOD = 0;
    const BANKING_METHOD = 1;

    public static $methodText = [
        self::COD_METHOD => 'COD',
        self::BANKING_METHOD => 'BANKING',
    ];

    // Gender
    const GENDER_UNKNOWN = 0;
    const GENDER_MALE = 1;
    const GENDER_FEMALE = 2;

    public static $genderText = [
        self::GENDER_UNKNOWN => 'Chưa xác định',
        self::GENDER_MALE => 'Trai',
        self::GENDER_FEMALE => 'Gái',
    ]; 
    // Delivery
    const DELIVERY_CONFIRM = 0;
    const DELIVERY_SUCCESS = 1;
    const DELIVERY_RETURN = 2;

    public static $deliveryText = [
        self::DELIVERY_CONFIRM => 'Đã xác nhận đơn',
        self::DELIVERY_SUCCESS => 'Đã giao hàng',
        self::DELIVERY_RETURN => 'Hoàn hàng',
    ];     
}
