<?php

namespace App\Http\Controllers\Static;

use App\Http\Controllers\Controller;
use App\Repositories\FaqRepository;

class HelpCenterController extends Controller
{
    public function __construct(private FaqRepository $faqRepository){}

    public function index()
    {
        $faqs = $this->faqRepository->getFaqskeyedByCategories();
        
        return view('pages.static.help-center', \compact('faqs'));
    }
}
