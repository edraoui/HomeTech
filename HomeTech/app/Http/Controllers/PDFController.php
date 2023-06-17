<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Gloudemans\Shoppingcart\Facades\Cart;
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function printPDF()
    {
        $pdf = PDF::loadView('pdf');

        return $pdf->download('You_Order.pdf');
    }
}
