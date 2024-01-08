<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory;
    protected $primaryKey = 'soft_id';
    protected $table = 'softwares';
    public function devices()
    {
        return $this->hasMany(Device::class, 'soft_id', 'soft_id');
    }

    protected $fillable = [
        'soft_id',
        'hostname',
        'ip',
        'mac',
        'purpose',
        // 他のfillableな属性も必要に応じて追加
    ];
}
