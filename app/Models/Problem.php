<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Problem extends Model
{
    use HasFactory, HasSlug;


    protected $fillable = [
        'topic_id',
        'slug',
        'title',
        'description',
        'difficulty',
        'acceptance',
        'examples',
        'constraints',
    ];


    protected $casts = [
        'examples' => 'array',
        'constraints' => 'array',
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


    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'tag_problem', 'problem_id', 'tag_id');
    }


    public function companies(): BelongsToMany
    {
        return $this->belongsToMany(Company::class, 'company_problem', 'problem_id', 'company_id');
    }


    public function topic(): BelongsTo
    {
        return $this->belongsTo(Topic::class);
    }
}
