<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $primaryKey = 'loca_id';
    public $timestamps = false;
    public function devices()
    {
        return $this->hasMany(Device::class, 'loca_id', 'loca_id');
    }

    protected $fillable = [
        'loca_id',
        'ridge',
        'floor',
        'area',
        // 他のfillableな属性も必要に応じて追加
    ];
}
