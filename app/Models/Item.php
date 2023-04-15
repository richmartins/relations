<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\belongsToMany;

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

    public function referencedBy(): BelongsToMany
    {
        return $this->belongsToMany(Item::class, 'item_references', 'referenced_item_id', 'item_id')
                    ->withTimestamps();
    }

    public function references(): BelongsToMany
    {
        return $this->belongsToMany(Item::class, 'item_references', 'item_id', 'referenced_item_id')
                    ->withTimestamps();
    }
}
