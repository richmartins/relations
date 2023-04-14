<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class Item extends Model
{
    use HasFactory;

    protected $table = "items";
    protected $fillable = [
        "name",
        "description",
        "category_id"
    ];

    public function category(): BelongsTo
    {
        return $this->BelongsTo(Category::class);
    }

    public function references(): HasMany
    {
        $this->hasMany(References::class, 'item_id');
    }
}
