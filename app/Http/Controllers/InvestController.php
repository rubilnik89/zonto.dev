<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvestController extends Controller
{
    public function invest()
    {
        return view('invest/invest');
    }

    public function myShares()
    {
        return view('invest/myShares');
    }

    public function partnersStructure()
    {
        return view('invest/partnersStructure');
    }

    public function balance()
    {
        return view('invest/balance');
    }

    public function payment()
    {
        return view('invest/payment');
    }

    public function outPayment()
    {
        return view('invest/outPayment');
    }

    public function inPayment()
    {
        return view('invest/inPayment');
    }

    public function history()
    {
        return view('invest/history');
    }

    public function profile()
    {
        return view('invest/profile');
    }

    public function faq()
    {
        return view('invest/faq');
    }

    public function rules()
    {
        return view('invest/rules');
    }
}
