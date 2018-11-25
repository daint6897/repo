<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class sanpham
 * @package App\Models
 * @version October 6, 2018, 2:00 pm UTC
 *
 * @property string ten_san_pham
 * @property string gia
 */
class sanpham extends Model
{

    public $table = 'sanphams';
    


    public $fillable = [
        'ten_san_pham',
        'gia'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ten_san_pham' => 'string',
        'gia' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ten_san_pham' => 'required',
        'gia' => 'required'
    ];

    
}
