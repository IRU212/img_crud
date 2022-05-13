<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $items = Book::all();
        return view('post',['items'=>$items]);
    }

    public function store(Request $request){
        //アップロードされたファイルの取得
        $image = $request->file('image');

        //ファイルの保存とパスの取得
        $path = isset($image) ? $image->store('items','public') : '';
 
        //商品をデータベースに登録
        Book::create([
            'name' => $request->name,
            'price' => $request->price,
            'introduce' => $request->introduce,
            'image' => $path
        ]);
        return redirect()->route('book-home');
    }
}
