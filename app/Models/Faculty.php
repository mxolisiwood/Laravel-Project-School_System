<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Faculty
 * @package App\Models
 * @version April 8, 2020, 1:10 pm UTC
 *
 * @property string faculty_name
 * @property string faculty_code
 * @property string faculty_description
 * @property boolean faculty_status
 */
class Faculty extends Model
{

    public $table = 'faculties';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'faculty_name',
        'faculty_code',
        'faculty_description',
        'faculty_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'faculty_id' => 'integer',
        'faculty_name' => 'string',
        'faculty_code' => 'string',
        'faculty_description' => 'string',
        'faculty_status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'faculty_name' => 'required',
        'faculty_code' => 'required',
        'faculty_description' => 'required',
        'faculty_status' => 'required'
    ];

    
}
