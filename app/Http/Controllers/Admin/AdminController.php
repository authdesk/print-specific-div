<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        
        return view('admin.home');
    }


    public function invoice_print()
    {
        return view('admin.invoice.invoice');

    } 

}
