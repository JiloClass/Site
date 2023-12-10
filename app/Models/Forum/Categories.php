<?php

namespace App\Models\Forum;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categories extends Model
{
    use HasFactory;

    protected $table = "f_categories";

    protected $fillable = [
        "id",
        "name",
        "slug"
    ];

    public function subcategories() : HasMany
    {
        return $this->hasMany(SousCategories::class, "category_id", "id");
    }

    public function topics(): HasMany
    {
        return $this->hasMany(Topics::class, "category_id", "id");
    }
}
