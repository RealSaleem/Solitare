<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Banners extends Model
{
    use Translatable;
    protected $translatable = ['title' , 'excerpt' , 'description' , 'inner_title'];
    protected $table = 'banners_section';
}
