<?php

namespace App\Repositories;

use App\Models\Role;
use App\Repositories\BaseRepository;

/**
 * Class RoleRepository
 * @package App\Repositories
 * @version April 8, 2020, 1:43 pm UTC
*/

class RoleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
        'name'
    ];
    protected $primaryKey = 'roles_id'; // this roles_id is the id that we have inside our database table

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Role::class;
    }
}
