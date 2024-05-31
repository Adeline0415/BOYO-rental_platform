<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
    public function index()
    {

        //$items = Item::all();
        $items = Item::select('Name', 'Borrowed')->get();
        
        // 或者使用分頁
        // $items = Item::paginate(10);
        
        return view('item', compact('items'));
    }

    public function account_index()
    {
        $userId = auth()->id(); // 獲取當前已認證使用者的 ID
    
        $items = Item::where('borrower', $userId)->get();
        // 或者使用分頁
        // $items = Item::where('borrower', $userId)->paginate(10);
        
        return view('item', compact('items'));
    }

}
