<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
     public function index()
     {
          if (Auth::user()->hasRole('writer')) {

               return redirect('/writer');

          } elseif (Auth::user()->hasRole('admin')) {

               return redirect($_ENV['ADMIN_PATH_PREFIX']);

          } else {

          }
     }

}
