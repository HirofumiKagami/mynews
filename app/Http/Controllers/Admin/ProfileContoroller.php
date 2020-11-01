<?php　
// PHP/Laravel 08 ControllerとRoutingの関係について理解しよう 課題4

//artisanを使用し、このAdmin/ProfileControllerを作成
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileContoroller extends Controller
{
     //PHP/Laravel 08 ControllerとRoutingの関係について理解しよう 課題5
    
     public function add()
    {
        return view('admin.profile.create');
    }

    public function create()
    {
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
