<?php

namespace App\Http\Controllers;

use App\Models\Product;
use \DebugBar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function showProductId($id){
        return view('components.product.details', ['id' => $id]);
    }

    /**
     * @param Request $request
     * @return string
     */
    public function createProduct(Request $request): string
    {
        \Debugbar::addMessage('test', $request->input('productName'));
        //Getting Form
        //Adding new product in db
        $product = Product::create([
            'imageUrl' => $request->input('productImage'),
            'price' => $request->input('productPrice'),
            'name' => $request->input('productName')
        ]);

        $product->save();
        return redirect('catalog');
    }

    public function showProductList() {
        return view('components.product.list-product', ['products' => Product::all()]);
    }
}
