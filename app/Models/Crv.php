<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Crv extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'crv';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'IDPEL',
        'NO_RBM',
        'NAMA_GARDU',
        'NAMA_PELANGGAN',
        'ALAMAT',
        'GOL',
        'TRF',
        'DAYA',
        'BL_Awal',
        'BL_Akhir',
        'LBR',
        'RPTAG',
        'RPBK'
    ];

    /**
     * Get all data
     *
     * @return Illuminate\Support\Facades\DB
     */
    public static function getAll(): object
    {
        return DB::table('crv')->get();
    }
}
