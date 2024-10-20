<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UmkmMember extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = ['id'];

    public function umkmProducts()
    {
        return $this->hasMany(UmkmProduct::class, 'id');
    }
}
