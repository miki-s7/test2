<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\Products;

class ContactController extends Controller
{
    public function index()
  {
    return view('index');
  }

  public function register()
  {
    return view('register');
  }


}
