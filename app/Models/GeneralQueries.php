<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class GeneralQueries extends Model
{
    use Translatable;
    protected $translatable = ['name' , 'email' , 'phone' , 'message'];
    protected $table = 'general_queries';
}
