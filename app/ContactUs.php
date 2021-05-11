<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model{
	 protected $fillable = [
        'name',
        'email',
        'phone',
        'image',
        'city',
        'state',
        'zip_code',
    ];
}
