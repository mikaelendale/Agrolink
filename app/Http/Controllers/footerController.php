<?php

// app/Http/Controllers/YourController.php

namespace App\Http\Controllers;
use App\Models\Footer;
use Illuminate\Http\Request;

class footerController extends Controller
{
    public function showMasterPage()
    {
        $footerData = Footer::first(); // Retrieve the first record from the footer table
        return view('layouts.master', ['footerData' => $footerData]);
        
    }
}
