<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class Users extends Controller
{
    //
    function index(Request $req)
    {
      echo $req->file('user_img')->store('upload');
    }
}
