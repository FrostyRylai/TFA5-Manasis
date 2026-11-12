<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['id' => 1, 'name' => 'Rylai Crestfall', 'email' => 'rylai@example.com', 'phone' => '09123456789'],
            ['id' => 2, 'name' => 'Akasha Pain', 'email' => 'akasha@example.com', 'phone' => '09187654321'],
            ['id' => 3, 'name' => 'Kardel Sniper', 'email' => 'kardel021@example.com', 'phone' => '09112233445'],
            ['id' => 4, 'name' => 'Lina Inverse', 'email' => 'LinaInverser@example.com', 'phone' => '09998887766'],
            ['id' => 5, 'name' => 'Mirana Nightshade', 'email' => 'NightshadeMirana@example.com', 'phone' => '09190001122'],
        ];

        return view('customers', compact('customers'));
    }
}