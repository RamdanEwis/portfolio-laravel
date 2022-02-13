<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class AdminControllers extends Controller

{
 public  function showadminname()
{
    return 'This Admin Show Page Your Name Ramdan Ewes';
}
public  function editadminname()
{
    return 'This Edit Page';
}
    public function  index()
    {
        return view('admin/index');
    }


}

