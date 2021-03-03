<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Partners extends Model
{
    use Translatable;
    protected $translatable = ['title' , 'excerpt' , 'description'];
    protected $table = 'partners';
}
