<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class JobRoles extends Model
{
    use Translatable;
    protected $translatable = ['title'];
    protected $table = 'job_roles';
}
