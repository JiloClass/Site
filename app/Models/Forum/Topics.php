<?php

namespace App\Models\Forum;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Topics extends Model
{
    use HasFactory;

    protected $table = "f_topics";

    protected $fillable = [
        "id",
        "user_id",
        "category_id",
        "subcategory_id",
        "title",
        "content",
        "date",
        "resolve"
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function messages(): HasMany
    {
        return $this->hasMany(Messages::class, 'topic_id', 'id');
    }

    public function suivis(): HasMany
    {
        return $this->hasMany(Suivis::class, "topic_id", "id");
    }
}
