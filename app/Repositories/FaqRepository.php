<?php

namespace App\Repositories;

use App\Models\FaqCategory;

class FaqRepository
{
  public function getFaqskeyedByCategories(): array
  {
    $faqCategories = FaqCategory::with('faqs')->get();

    return $faqCategories->mapWithKeys(function ($item) {
      return [$item['name'] => $item->faqs->mapWithKeys(function ($item) {
        return [$item['question'] => $item['answer']];
      })->toArray()];
    })->toArray();
  }
}
