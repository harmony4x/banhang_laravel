<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wards extends Model
{
    use HasFactory;
    protected $table = 'village';
    protected $fillable = [
        'id', 'name', 'type', 'maqh',
    ];
    protected $primaryKey = 'id';

    public function province() {
        return $this->belongsTo(Province::class,'maqh');
    }
}
