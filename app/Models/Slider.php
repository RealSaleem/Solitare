<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Slider extends Model
{
    use Translatable;
    protected $translatable = ['title' , 'description' , 'button_text'];
    protected $table = 'slider';
}
