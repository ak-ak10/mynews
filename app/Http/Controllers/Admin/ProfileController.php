<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;

class profileController extends Controller
{
    //
  public function add()
    {
        return view('admin.profile.create');
    }

    public function create(Request $request)
    {
        $profile = new Profile;
        $profile->name = $request->hoge;
        $profile->gender = $request->gender;
        $profile->hobby = $request->hobby;
        $profile->introduction = $request->introduction;
        $profile->save();
        return redirect('admin/profile/create');
    }

    public function edit()
    {
        return view('admin.profile.edit');
    }

    public function update()
    {
        return redirect('admin/profile/edit');
    }
}