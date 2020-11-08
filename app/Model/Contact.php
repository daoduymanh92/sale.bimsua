<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $table = 'contacts'; 
    protected $fillable = [
        'name', 'phone', 'address', 'facebook', 'description'
    ];

    /**
     * Get the tickets for the contact.
     */
    public function tickets()
    {
        return $this->hasMany('App\Model\Ticket', 'tickets.phone', 'contacts.phone');
    }
}
