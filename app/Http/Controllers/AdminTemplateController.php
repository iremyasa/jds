<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminTemplateController extends Controller
{
    public function index()
    {
        return view('layouts.admin-template');
    }
    public function createView()
    {
        return view('users.create');
    }
    public function profilView()
    {
        $yemekTarifleri=DB::table('menus')->orderBy('created_at','desc')->get();
        return view('profil.profil',compact('yemekTarifleri'));
    }

    public function mailView()
{
    return view('profil.mail');
}
    public function tarifView($id)
    {
        $urunTarifi=DB::table('menus')->where('id','=',$id)->get();
        return view('product.tarif-detay',compact('urunTarifi'));
    }
    public function create(Request $request)
    {

        DB::table('menus')->insert([
            'baslangic' => $request->get('name'),
            'anayemek' => $request->get('email'),
            'tatli'=> $request->get('tatli')

        ]);

        return 'İstek başarıyla tamamlandı!';

    }
}
