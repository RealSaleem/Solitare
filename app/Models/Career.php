<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Career extends Model
{
    use Translatable;
    protected $translatable = ['email' , 'phone' , 'first_name' , 'last_name' , 'role' , 'city' , 'experience' , 'notice_period' , 'current_salary' , 'expected_salary' , 'resume' , 'portfolio_url' , 'reason' , 'job_type'];
    protected $table = 'career';
}
