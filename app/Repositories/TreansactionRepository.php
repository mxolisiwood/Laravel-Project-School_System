<?php

namespace App\Repositories;

use App\Models\Treansaction;
use App\Repositories\BaseRepository;

/**
 * Class TreansactionRepository
 * @package App\Repositories
 * @version April 8, 2020, 1:29 pm UTC
*/

class TreansactionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'student_id',
        'fee_id',
        'user_id',
        'paid',
        'transaction_date',
        'remark',
        'description'
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
        return Treansaction::class;
    }
}
