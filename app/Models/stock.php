<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    use HasFactory;

    /* initializing the table */
    protected $table ='products';

    /*calling fields */

    protected $fillable = [
        'name',
        'description'
    ];
}
