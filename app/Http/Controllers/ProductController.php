<?php

namespace App\Http\Controllers;

use App\Helpers\UploadPaths;
use App\Menu;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function  productCreateView ()
    {
        return view('product.create');
    }
    public function productCreate(Request $request){
        $kategori = $request->get('kategori');
        $tarifadi = $request->get('tarifadi');
        $kackisi = $request->get('kackisi');
        $malzemeler = $request->get('malzemeler');
        $hazirlanisi = $request->get('hazirlanisi');
        $filePhotoUrl = $request->file('photo');
        $user = Auth::user()->id;
        if(isset($filePhotoUrl)){
            $productPhotoName = uniqid('product_'). '.' . $filePhotoUrl->getClientOriginalExtension();
            $filePhotoUrl->move(UploadPaths::getUploadPath('product_photos'),$productPhotoName);
        }
        Menu::create([
            'kategori' => $kategori,
            'tarifadi'=> $tarifadi,
            'kackisi' => $kackisi,
            'malzemeler' => $malzemeler,
            'hazirlanisi' => $hazirlanisi,
            'photo' => $productPhotoName,
            'is_approve' => false,
            'created_by' => $user,
            'updated_by' => $user
        ]);
        return "<script>alert('Işlem Başarılı')</script>".back();

    }
    public function indexView()
    {
        $user = Auth::user()->id;
        $products = Menu::with(['user'])->where('updated_by','=',$user)->where('created_by','=',$user)->where('deleted_at','=',null)->get();
        return view('urun-ekle',compact('products'));
    }
}
