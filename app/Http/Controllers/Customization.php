<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Session;

class Customization extends Controller
{
    
    public function update(Request $request)
{
    $request->validate([
        'mode' => 'required|in:light,dark',
    ]);

    Session::put('mode',$request->mode);

    return redirect()->back()->with('success', 'Settings updated successfully.');
}
}