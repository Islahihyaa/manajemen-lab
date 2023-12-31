<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratory extends Model
{
    use HasFactory;

    protected $table = 'laboratory';

    protected $fillable = [
        'laboratory_name',
        'laboratory_description',
    ];

    public function inventory()
    {
        return $this->hasMany(Inventory::class);
    }
}
