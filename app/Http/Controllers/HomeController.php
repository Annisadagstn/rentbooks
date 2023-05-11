<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
   function __construct()
   {
      $this->middleware(‘admin’);
   }

   public function index()
   {
      $data = ['Kendal', 'Semarang'];
      return view('posts', compact('data'));
   }
   
}
