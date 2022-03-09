<?php

namespace App\Http\Controllers\Static;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeenCookiePolicyController extends Controller
{
    public function accept(Request $request)
    {
        if ($request->ajax()) {    
            return response('ok', 200)->cookie(
                'cookieAlertSeen', true, 12200
            );
        }

        return \response('unauthorized access', 400);
    }
}
