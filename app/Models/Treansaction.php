<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Treansaction
 * @package App\Models
 * @version April 8, 2020, 1:29 pm UTC
 *
 * @property integer student_id
 * @property integer fee_id
 * @property integer user_id
 * @property integer paid
 * @property string transaction_date
 * @property string remark
 * @property string description
 */
class Treansaction extends Model
{

    public $table = 'transactions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'student_id',
        'fee_id',
        'user_id',
        'paid',
        'transaction_date',
        'remark',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'transaction_id' => 'integer',
        'student_id' => 'integer',
        'fee_id' => 'integer',
        'user_id' => 'integer',
        'paid' => 'integer',
        'transaction_date' => 'date',
        'remark' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'student_id' => 'required',
        'fee_id' => 'required',
        'user_id' => 'required',
        'paid' => 'required',
        'transaction_date' => 'required',
        'remark' => 'required',
        'description' => 'required'
    ];

    
}
