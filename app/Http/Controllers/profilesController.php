<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class profilesController extends Controller{
    public function index($user){
        $user = \App\Models\User::findOrFail($user);
        return view('profiles.index', [
            'user' => $user,
        ]);
    }

    public function edit(\App\Models\User $user){
        $this->authorize('update', $user->profile);

        return view('profiles.edit', compact('user'));
    }

    public function update(\App\Models\User $user){
        $data = request()->validate([
             'title' => 'required',
             'description' => 'required',
             'url' => 'url',
             'image' => '',
            ]);

        auth()->user()->profile->update($data);

        return redirect('/profile/'.$user->id);
    }
}
