<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Spp extends Model
{
    use SoftDeletes;

    protected $table = "spps";

    protected $fillable = ['kelas','tempat_bayar','jumlah_bayar'];
}
