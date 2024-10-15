<?php

namespace App\Http\Controllers;
use App\Models\Menu; 
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function viewMenu()
   {
    $menu =  Menu::select('menu_name', 'url')->where('is_delete', 0)->where('status', 0)->get();
   //  dd($menu);
   return view('/dashboard' , compact('menu'));
   } 
}
