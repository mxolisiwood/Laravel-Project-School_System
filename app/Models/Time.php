<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Time
 * @package App\Models
 * @version April 8, 2020, 1:13 pm UTC
 *
 * @property string time
 */
class Time extends Model
{

    public $table = 'times';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



   protected $primaryKey = 'time_id';
    public $fillable = [
        'time'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'time_id' => 'integer',
        'time' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'time' => 'required'
    ];

    
}
