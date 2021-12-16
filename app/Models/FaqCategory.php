<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FaqCategory extends Model
{
    use HasFactory;

    protected $table = 'faq_categories';

    protected $fillable = [
        'name',
    ];

    public function faq(): HasMany
    {
        return $this->hasMany(Faq::class, 'faq_category_id');
    }
}
