<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Events extends Model
{
    use Translatable;
    protected $translatable = ['name' , 'excerpt' , 'short_description' , 'author_name' , 'designation' , 'description_1' , 'description_2' , 'slug'];
    protected $table = 'events';
}
