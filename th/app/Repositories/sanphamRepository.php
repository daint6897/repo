<?php

namespace App\Repositories;

use App\Models\sanpham;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class sanphamRepository
 * @package App\Repositories
 * @version October 6, 2018, 2:00 pm UTC
 *
 * @method sanpham findWithoutFail($id, $columns = ['*'])
 * @method sanpham find($id, $columns = ['*'])
 * @method sanpham first($columns = ['*'])
*/
class sanphamRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return sanpham::class;
    }
}
