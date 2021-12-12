<?php

namespace App\Http\Controllers\Static;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelpCenterController extends Controller
{
    public function getFaqs()
    {
        $faqs = [
            "General" => [
                "What is kari?" => "kari is a property search and recommendation service.",
                "Is kari a real estate service?" => "Although kari provides ease of accesing a property, kari is not a typical real estate service.",
                "Is kari a rental platform?" => "No, kari does not provide rental services.",
                "Is kari a network platform?" => "No, kari is not a network platform.",
                "Is kari owned by any higher educational institution?" => "No, kari is an independent and free-to-use e-service.",
                "Is kari owned by any higher educational institution?" => "No, kari is an independent property finder e-service.",
                "Do I need anything special to use kari?" => "No, you can access all of kari's services after signing up and completing your profile details.",
            ],
            "Investment plans" => [
                "How do I find a investment on kari" => "After signing up and uprental your profile details correctly,recommended propertys will be displayed to you, you could also search and filter propertys to your choice.",
                "Will kari recommend investment from other locations?" => "kari uses a high-quality recommender algorithm based on accurate profile data analysis and comparisons.",
                "Can I search for a investment plan by myself on kari?" => "kari uses a high-quality recommender algorithm based on accurate profile data analysis and comparisons.",
                "How many investment plans can I subscribe to on kari?" => "kari uses a high-quality recommender algorithm based on accurate profile data analysis and comparisons.",
                "How many kari investment can I add to my watchlist?" => "kari uses a high-quality recommender algorithm based on accurate profile data analysis and comparisons.",
                "Can I restrict the number of property requests I can recieve?" => "kari uses a high-quality recommender algorithm based on accurate profile data analysis and comparisons.",
            ],
            "kari's policies and reporting" => [
                "Can I send property request?" => "result",
                "How do I search results?" => "result",
                "What issues can I report for?" => "result",
                "Why is my account blocked?" => "result",
                "What can I do if my account is blocked?" => "result",
                "Why is my account suspended?" => "result",
                "What can I do if my account is suspended on kari?" => "result",
            ],
            "Profile and Account" => [
                "How do I verify my email address?" => "result",
                "How can I change my password?" => "result",
                "How do I reset my password if I've forgotten it?" => "result",
                "Why can't I update all my profile information?" => "result",
                "How do I deactivate my account?" => "result",
                "How do I reactivate my account?" => "result",
            ],
        ];

        return $faqs;
    }

    public function index()
    {
        $faqs = $this->getFaqs();

        return view('pages.help-center', \compact('faqs'));
    }
}
