<?php

namespace App\Repositories;

use App\Models\FaqCategory;

class FaqRepository
{
  public function getFaqskeyedByCategories(): array
  {
    $faqCategories = FaqCategory::with('faq')->get();

    return $faqCategories->mapWithKeys(function ($item) {
      return [$item['name'] => $item->faq->mapWithKeys(function ($item) {
        return [$item['question'] => $item['answer']];
      })->toArray()];
    })->toArray();
  }
}
