<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'logo'];

    public function problems(): BelongsToMany
    {
        return $this->belongsToMany(Problem::class, 'company_problem', 'company_id', 'problem_id');
    }
}
