<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Discussion extends Model
{
    use HasFactory;


    protected $fillable = [
        'slug',
        'user_id',
        'title',
        'vote',
        'description',
    ];


    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }



    public function discussionType(): BelongsTo
    {
        return $this->belongsTo(DiscussionType::class, 'discussion_type_id', 'id');
    }


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
