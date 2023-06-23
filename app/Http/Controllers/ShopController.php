<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shops = Shop::all();
        return view('index', ['shops' => $shops]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all()->pluck('name','id');//要素の中から指定したメソッドを取り出す
        return view('new', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     * 投稿内容を保存
     */
    public function store()
    {
        $shop = new Shop;
        $shop->name = request('name');
        $shop->address = request('address');
        $shop->category_id = request('category_id');
        $shop->save();
        return redirect()->route('shop.detail',['id' => $shop->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $shop = Shop::find($id);
        return view('show', ['shop' => $shop]);
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * //編集情報を呼び出す編集フォーム
     */
    public function edit(Shop $shop, $id)
    {
        $shop = Shop::find($id);
        $categories = Category::all()->pluck('name','id');
        return view('edit', ['shop' => $shop, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id, Shop $shop)
    {
        $shop = Shop::find($id);
        $shop->name = request('name');
        $shop->address = request('address');
        $shop->category_id = request('category_id');
        $shop->save();
        return redirect()->route('shop.detail',['id' => $shop->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $shop = Shop::find($id);//指定した情報を取り出す
        $shop->delete();
        return redirect('/shops');
    }

    
}
