<?php

namespace App\Models\Forum;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Messages extends Model
{
    use HasFactory;

    protected $table = "f_messages";

    protected $fillable = [
        "id",
        "user_id",
        "topic_id",
        "content",
        "date",
        "best_response"
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class, "user_id");
    }
}
