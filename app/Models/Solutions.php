<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Solutions extends Model
{
    use Translatable;
    protected $translatable = ['name' , 'excerpt' , 'description_1' , 'title' , 'button_text' , 'description_2'];
    protected $table = 'solutions';
}
