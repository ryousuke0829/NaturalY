<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function consumerManagement()
    {
        $consumers = User::paginate(10);

        return view('admin.consumer-management')
                ->with('consumers', $consumers);
    }

    public function consumerProfile(User $user)
    {
        return view('admin.consumer-profile')
                ->with('consumer', $user);
    }

    public function farmManagement()
    {
        return view('admin.farm-management');
    }

    public function farmProfile()
    {
        return view('admin.farm-profile');
    }

    public function itemManagement()
    {
        return view('admin.item-management');
    }

    public function showItem()
    {
        return view('admin.show-item');
    }

    public function analysis()
    {
        return view('admin.analysis');
    }
}
