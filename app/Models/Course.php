<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function category()
    {
    	return $this->belongsTo('App\Models\CourseCategory','course_category_id');
    }
}
