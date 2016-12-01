<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $primaryKey = 'service_id';
    protected $table = 'service';

    protected $fillable = [
        'service_name',
        'service_alias',
        'user_id',
        'short_description',
        'description'
    ];
}
