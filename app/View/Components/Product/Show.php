<?php

namespace App\View\Components\Product;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Show extends Component
{

    /**
     * @var Product
     *
     * Product ID
     */
    public $product;

    /**
     * Create a new component instance.
     *
     * @param $product
     */
    public function __construct($product)
    {
        $this->product = $product;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.product.show');
    }
}
