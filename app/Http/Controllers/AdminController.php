<?php

namespace App\Http\Controllers;

use App\Menu;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $yemekTarifleri=DB::table('menus')->orderBy('created_at','desc')->get();
        return view('layouts.admin-master',compact('yemekTarifleri'));
    }

    public function indexView()
    {
        $yemekTarifleri=DB::table('menus')->get();
        return view('layouts.tarif-master',compact('yemekTarifleri'));
    }
    public function yemekView()
    {
        return view('adminpanel.yemekokulu');
    }
    public function yakindaView()
    {
        return view('adminpanel.yakinda');
    }
    public function yemekTarifleriView()
{
    $yemekTarifleri=DB::table('menus')->get();
    return view();
}
    public function categoryView($name)
    {
        $contents=Menu::where('kategori', '=', $name)->get();
        return view('kategori', compact('contents'));

    }

}
