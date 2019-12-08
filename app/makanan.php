<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class makanan extends Model
{
    protected $fillable = [
        "name",
        "description",
        "price"
    ];
}
