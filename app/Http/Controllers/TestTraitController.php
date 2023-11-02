<?php

namespace App\Http\Controllers;
use App\Traits\testTrait;
use Illuminate\Http\Request;


class TestTraitController extends Controller
{
    use testTrait;

    /**
     * How to use the trait function
     */
    public function showMessage()
    {
        // Call trait test function
        return $this->test();
    }
}
