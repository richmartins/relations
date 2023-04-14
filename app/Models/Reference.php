<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    use HasFactory;
    protected $table = "references";

    protected $fillable = [
        "item_id",
        "reference_id"
    ];

    public function references(): HasMany
    {
        return $this->hasMany();
    }
}
