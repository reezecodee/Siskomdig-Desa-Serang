<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UmkmProduct extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = ['id'];

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function umkmMembers()
    {
        return $this->belongsTo(UmkmMember::class);
    }
}
