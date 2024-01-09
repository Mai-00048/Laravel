<?php
 
namespace App\Http\Controllers;
 
class HomeController extends Controller
{
    public function index()
    {
        return view('employees.index');

      //  return view('employees');
    }
}