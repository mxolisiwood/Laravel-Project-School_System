<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Teacher
 * @package App\Models
 * @version April 8, 2020, 1:42 pm UTC
 *
 * @property string first_name
 * @property string last_name
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
 * @property string image
 */
class Teacher extends Model
{

    public $table = 'teachers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $primaryKey = 'teacher_id';

    public $fillable = [
        'first_name',
        'last_name',
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
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'teacher_id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
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
        'user_id' => 'required'
    ];

    
}
