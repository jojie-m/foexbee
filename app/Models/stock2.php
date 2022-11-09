<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock2 extends Model
{
    use HasFactory;
    
    /* initializing the table */
    protected $table ='stock2s';

    /*calling fields */

    protected $fillable = [
        'name',
        'description'
    ];
}
