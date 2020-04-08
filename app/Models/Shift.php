<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Shift
 * @package App\Models
 * @version April 8, 2020, 1:05 pm UTC
 *
 * @property string shift
 */
class Shift extends Model
{

    public $table = 'shifts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'shift'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'shift_id' => 'integer',
        'shift' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'shift' => 'required'
    ];

    
}
