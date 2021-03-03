<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Services extends Model
{
    use Translatable;
    protected $translatable = ['title' , 'excerpt' , 'description_1' , 'description_2'];
    protected $table = 'services';
}
