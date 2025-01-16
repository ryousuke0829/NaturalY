<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    private $favorite;

    public function __construct(favorite $favorite) {
        $this->favorite = $favorite;
    }

    public function addToFavorites($item_id)
    {
        $this->favorite->user_id =Auth::user()->id;
        $this->favorite->item_id =$item_id;
        $this->favorite->save();
        

        return redirect()->back();
    }

    public function removeFromFavorites($item_id)
    {
        $this->favorite
        ->where('user_id', Auth::user()->id)
        ->where('item_id', $item_id)      
        ->delete();                        
        return redirect()->back();
    }

    public function showFavorites()
    {
        // ログイン中のユーザーのお気に入りを取得
        $favorites = Favorite::with('item') // リレーションで商品情報をロード
            ->where('user_id', Auth::id())
            ->paginate(8); // 1ページに8件表示

        $favoriteCount = Favorite::where('user_id', Auth::id())->count();

        return view('consumer.favorites', compact('favorites', 'favoriteCount'));
    }
    

}