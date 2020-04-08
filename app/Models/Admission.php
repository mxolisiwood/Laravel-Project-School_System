<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Admission
 * @package App\Models
 * @version April 8, 2020, 1:37 pm UTC
 *
 * @property string first_name
 * @property string last_name
 * @property string father_name
 * @property string father_phone
 * @property string mother_name
 * @property string mother_phone
 * @property string gender
 * @property string email
 * @property string dob
 * @property string phone
 * @property string address
 * @property string current_address
 * @property string nationality
 * @property string passport
 * @property boolean status
 * @property string date_registered
 * @property integer user_id
 * @property integer class_id
 * @property string image
 */
class Admission extends Model
{

    public $table = 'admissions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'first_name',
        'last_name',
        'father_name',
        'father_phone',
        'mother_name',
        'mother_phone',
        'gender',
        'email',
        'dob',
        'phone',
        'address',
        'current_address',
        'nationality',
        'passport',
        'status',
        'date_registered',
        'user_id',
        'class_id',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'student_id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'father_name' => 'string',
        'father_phone' => 'string',
        'mother_name' => 'string',
        'mother_phone' => 'string',
        'gender' => 'string',
        'email' => 'string',
        'dob' => 'date',
        'phone' => 'string',
        'address' => 'string',
        'current_address' => 'string',
        'nationality' => 'string',
        'passport' => 'string',
        'status' => 'boolean',
        'date_registered' => 'date',
        'user_id' => 'integer',
        'class_id' => 'integer',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'father_name' => 'required',
        'father_phone' => 'required',
        'mother_name' => 'required',
        'mother_phone' => 'required',
        'gender' => 'required',
        'email' => 'required',
        'dob' => 'required',
        'phone' => 'required',
        'address' => 'required',
        'current_address' => 'required',
        'nationality' => 'required',
        'passport' => 'required',
        'status' => 'required',
        'date_registered' => 'required',
        'user_id' => 'required',
        'class_id' => 'required'
    ];

    
}
