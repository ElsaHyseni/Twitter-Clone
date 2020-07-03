<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{
    public function show(User $user){
        return view('profiles.show', [
            'user'=> $user, 
            'tweets' => $user->tweets()->paginate(30),
        ]);
    }

    public function edit(User $user){

        $this->authorize('edit', $user);
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user){ 
        $attributes = request()->validate([

            'username' => ['string', 'required', 'max:255', 'alpha_dash', 
            Rule::unique('users')->ignore($user)],
            'avatar' => ['image'],
            'name' => ['string', 'required', 'max:255'],
            'email' => ['string', 'required', 'email', 'max:255', 
            Rule::unique('users')->ignore($user)],
            'password' => ['string', 'required', 'min:8', 'max:40', 'confirmed']
        ]);

        if(request('avatar')){
            $attributes['avatar'] = request('avatar')->store('avatars');
        }

        $user->update($attributes); 
        
        $this->authorize('edit', $user);

        return redirect($user->path());
    }

    public function logout(){
        Auth::logout($user);
    }
}
