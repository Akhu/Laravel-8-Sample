<?php

namespace App\View\Components\Review;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Show extends Component
{

    /**
     * @var Review
     *
     * Product ID
     */
    public $review;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($review)
    {
        $this->review = $review;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.review.show');
    }
}
