<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Role
 * @package App\Models
 * @version April 8, 2020, 1:43 pm UTC
 *
 * @property string name
 */
class Role extends Model
{

    public $table = 'roles';

    protected $primaryKey = 'roles_id';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'roles_id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    public function user(){
        return $this->hasMany('App\Models\User');
    }

    
}
