<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = ['id'];

    public function businessFields()
    {
        return $this->belongsTo(BusinessField::class, 'business_id', 'id');
    }
}
