<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FaqCategory extends Model
{
    use HasFactory;

    protected $table = 'faq_categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
    ];


    /**
     * The faqs that belong to this category.
     * 
     * @method faqs()
     *
     * @return HasMany
     */
    public function faqs(): HasMany
    {
        return $this->hasMany(Faq::class, 'faq_category_id');
    }
}
