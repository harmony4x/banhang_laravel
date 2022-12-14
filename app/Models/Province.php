<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    protected $table = 'province';
    protected $fillable = [
        'id', 'name', 'type', 'matp',
    ];
    protected $primaryKey = 'id';

    public function city() {
        return $this->belongsTo(City::class,'matp');
    }
}
