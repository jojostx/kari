<?php

namespace App\Http\Controllers\Static;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\FaqRepository;

class HelpCenterController extends Controller
{
    public function __construct(private FaqRepository $faqRepository){}

    public function index()
    {
        $faqs = $this->faqRepository->getFaqskeyedByCategories();
        
        return view('pages.help-center', \compact('faqs'));
    }
}
