<?php

namespace App\Http\Controllers;

use Illuminate\View\View;


class SurfShopController extends Controller
{
    public function index(): View
    {
        return view('surfshop', [
            //
        ]);
    }
}
