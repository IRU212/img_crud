<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{

    public function index(){
        $items = Book::all();
        return view('book',['items'=>$items]);
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

    public  function edit(Book $item){
        return view('book.book_edit',['item'=>$item]);
    }

    public function update(Book $item,Request $request){
        // 画像ファイルパスのインスタンス取得
        $image = $request->file('image');
        // 現在の画像へのパスをセット
        $path = $item->image;
        if(isset($imaage)){
            //現在の画像ファイルパスの削除
            Storage::disk('public')->delete($path);
            // 選択された画像ファイルを保存してパスをセット
            $path = $image->store('items', 'public');
        }
        // データベースを更新
        $item->update([
            'name' => $request->name,
            'price' => $request->price,
            'introduce' => $request->introduce,
            'image' => $path
        ]);
        return redirect()->route('book-edit',$item);
    }

}
