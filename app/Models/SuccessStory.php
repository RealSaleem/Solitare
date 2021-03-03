<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class SuccessStory extends Model
{
    use Translatable;
    protected $translatable = ['name' , 'project_description' , 'description' , 'image_1_text' , 'image_2_text' , 'slug'];
    protected $table = 'success_stories';
}
