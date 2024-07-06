<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminNavigationController extends Controller
{
    public function orders()
    {
        // view untuk admin/orders
        return view('admin.orders');
    }

    public function products()
    {
        // view untuk admin/products
        return view('admin.products');
    }

    public function customers()
    {
        // view untuk admin/customers
        return view('admin.customers');
    }

    public function reports()
    {
        // view untuk admin/reports
        return view('admin.reports');
    }

    public function settings()
    {
        // view untuk admin/settings
        return view('admin.settings');
    }
}
