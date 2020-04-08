<?php

namespace App\Repositories;

use App\Models\Batche;
use App\Repositories\BaseRepository;

/**
 * Class BatcheRepository
 * @package App\Repositories
 * @version April 8, 2020, 11:32 am UTC
*/

class BatcheRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'batch'
    ];

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
        return Batche::class;
    }
}
