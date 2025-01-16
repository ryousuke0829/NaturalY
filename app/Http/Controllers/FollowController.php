<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Follow;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
 
    public function followings()
    {
        $user = Auth::user();

        $follows = Follow::with('farm')
            ->where('user_id', $user->id)
            ->paginate(6);
        
        $farms = collect($follows->items())->map(function ($follow) {
            $farm = $follow->farm;
            $farm->followers_count = $farm->followers()->count();
            return $farm;

        });

        $farms = new \Illuminate\Pagination\LengthAwarePaginator(
            $farms,
            $follows->total(),
            $follows->perPage(),
            $follows->currentPage(),
            ['path' => $follows->path()]
        );

        return view('consumer.followings', compact('farms'));
    }

    public function follow($farm_id)
    {
        $user = Auth::user();

        if (!Follow::where('user_id', $user->id)->where('farm_id', $farm_id)->exists()) {
            Follow::create([
                'user_id' => $user->id,
                'farm_id' => $farm_id,
            ]);
        }

        return redirect()->back();
    }

    public function toggleFollow($farm_id)
    {
        $user = Auth::user();

        $farm = User::where('id', $farm_id)->where('role_id', 3)->firstOrFail();

        $follow = Follow::where('user_id', $user->id)->where('farm_id', $farm_id)->first();

        if ($follow) {
            $follow->delete();
        } else {
            Follow::create([
                'user_id' => $user->id,
                'farm_id' => $farm_id,
            ]);
        }

        return redirect()->back();
    }

    public function unfollow($farm_id)
    {
        $user = Auth::user();

        Follow::where('user_id', $user->id)
            ->where('farm_id', $farm_id)
            ->delete();

        return redirect()->back();
    }

    public function showFollowers($farm_id)
    {
        $farm = User::where('role_id', 3)->findOrFail($farm_id);
        $followers = $farm->followers()->with('user')->get();
    
        return view('farm.followers', compact('farm', 'followers'));
    }
    
}