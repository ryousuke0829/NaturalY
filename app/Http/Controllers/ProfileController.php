<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{   
    private $user;
    public function __construct(User $user){ 
        $this->user=$user;  
    }
    
    public function showProfile()
    {   
        $user = Auth::user();
        return view('consumer.profile', compact('user'));
    }
    public function selectRole()
    {
        return view('auth.register-role');
    }

    public function showRegiserConsumer()
    {
        $user = Auth::user();
        return view('auth.register-consumer', compact('user'));
    }
    public function showRegiserFarm()
    {
        $user = Auth::user();
        return view('auth.register-farm', compact('user'));
    }

    // Definde the Role of User
    public function storeRole(Request $request)
    {
        $request->validate([
            'role_id' => 'required|in:2,3',
        ]);
    
        $user = $this->user->findOrFail(Auth::user()->id);
        $user->role_id = $request->role_id;
        $user->save();
    
        if ($user->role_id == 2) {
            return redirect()->route('showRegiserConsumer', compact('user'));
        } elseif ($user->role_id == 3) {
            return redirect()->route('showRegiserFarm', compact('user'));
        }
    
        return redirect()->route('home');
    }

    // Save User Profile
    public function storeProfile(Request $request)
    {
        $user = $this->user->findOrfail(Auth::user()->id);
        
        $rules = [
            'avatar' => 'nullable|mimes:jpeg,jpg,png,gif,webp|max:1024',
            'zip_code' => 'required',
            'prefecture' => 'required|string',
            'address' => 'required|string|max:255',
            'phone_number' => 'required|regex:/\d{3}-\d{4}-\d{4}/',
            'first_product' => 'nullable',
            'second_product' => 'nullable',
            'farm_description' => 'nullable',
        ];
    
        if ($user->role_id == 3) {
            $rules['farm_name'] = 'required|string|max:255';
        } else {
            $rules['farm_name'] = 'nullable|string|max:255';
        }
    
        $request->validate($rules);
        
        if ($request->hasFile('avatar')) {
            $user->avatar = 'data:avatar/'.$request->avatar->extension().';base64,'.base64_encode(file_get_contents($request->avatar));
        } else {
            $user->avatar = $user->avatar ?? null;
        }
        $user->zip_code     = $request->zip_code;
        $user->prefecture   = $request->prefecture;
        $user->address      = $request->address;
        $user->phone_number = $request->phone_number;
        $user->farm_name    = $request->farm_name;
        $user->first_product = $request->first_product;
        $user->second_product = $request->second_product;
        $user->farm_description = $request->farm_description;
    
        $user->save();
        return redirect()->route('index', compact('user'));
    }

    // Move to Update User Page
    public function editProfile(){
        $user = $this->user->findOrFail(Auth::user()->id);
        if ($user->role_id == 2) {
            return view('consumer.profile-update', compact('user'));
        } elseif ($user->role_id == 3) {
            return view('farm.profile-update', compact('user'));
        }
    }

    // Update User Profile
    public function UpdateProfile(Request $request)
    {
        $request->validate([
            'avatar' => 'nullable|mimes:jpeg,jpg,png,gif,webp|max:1024',
            'zip_code' => 'nullable',
            'prefecture' => 'nullable|string',
            'address' => 'nullable|string|max:255',
            'phone_number' => 'nullable|regex:/\d{3}-\d{4}-\d{4}/',
            'farm_name' => 'nullable',
            'first_product' => 'nullable',
            'second_product' => 'nullable',
            'farm_description' => 'nullable',
        ]);
    
        $user = $this->user->findOrfail(Auth::user()->id);

        $user->zip_code = $request->zip_code;
        $user->prefecture = $request->prefecture;
        $user->address = $request->address;
        $user->phone_number = $request->phone_number;
        $user->farm_name = $request->farm_name;
        $user->first_product = $request->first_product;
        $user->second_product = $request->second_product;
        $user->farm_description = $request->farm_description;

        if($request->avatar){
            $user->avatar = 'data:avatar/'.$request->avatar->extension().';base64,'.base64_encode(file_get_contents($request->avatar));
        }else{
            $user->avatar = $user->avatar;
        }
    
        $user->save();
        if ($user->role_id == 2) {
            return redirect()->route('consumer.showProfile', compact('user')); 
        } elseif ($user->role_id == 3) {
            return redirect()->route('index', compact('user'));
        }
    }
}
