<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //
    protected $table = 'tickets'; 
    protected $fillable = [
        'phone', 'note', 'notification_date'
    ];

    /**
     * Get the contact that owns the ticket.
     */
    public function contact()
    {
        return $this->belongsTo('App\Model\Contact','phone', 'phone');
    }
}
