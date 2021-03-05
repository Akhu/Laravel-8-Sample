<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class CartController extends Controller
{
    /**
     * @param Request $request
     * @param $id
     * @return Application|RedirectResponse|Redirector
     */
    public function addToCart(Request $request, $productId){
        $request->session()->push("user.cart", $productId);
        return redirect("catalog");
    }
}
