<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Category extends Model
{
    use Translatable;
    protected $translatable = ['name' , 'slug'];
    protected $table = 'categories';

    public function blogs(){
        return $this->hasMany(Blogs::class, 'category_id', 'id');
    }
}
