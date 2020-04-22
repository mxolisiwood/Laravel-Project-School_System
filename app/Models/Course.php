<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Course
 * @package App\Models
 * @version April 8, 2020, 1:08 pm UTC
 *
 * @property string course_name
 * @property string course_code
 * @property string description
 * @property boolean status
 */
class Course extends Model
{

    public $table = 'courses';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];
    protected $primaryKey = 'course_id';

    public $fillable = [
        'course_name',
        'course_code',
        'description',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'course_id' => 'integer',
        'course_name' => 'string',
        'course_code' => 'string',
        'description' => 'string',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'course_name' => 'required',
        'course_code' => 'required',
        'description' => 'required',
        'status' => 'required'
    ];

    
}
