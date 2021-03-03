<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class NewsEventsSlider extends Model
{
    use Translatable;
    protected $translatable = ['title' , 'author_name'];
    protected $table = 'newsslider';
}
