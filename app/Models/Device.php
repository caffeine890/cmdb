<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $primaryKey = 'manage_id';

    public function software()
    {
        return $this->belongsTo(Software::class, 'soft_id', 'soft_id');
    }

    public function location()
    {
        return $this->belongsTo(Location::class, 'loca_id', 'loca_id');
    }


    protected $fillable = [
        'manage_id',
        'soft_id',
        'loca_id',
        'dev_type',
        'CPU',
        'RAM',
        'HDD',
        // 他のfillableな属性も必要に応じて追加
    ];

}
