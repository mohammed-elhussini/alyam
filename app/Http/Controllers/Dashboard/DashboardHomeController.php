<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardHomeController extends Controller
{
   public function dashboardHome(){
       $users = User::count();
       $contacts = Contact::count();
       $cars = Contact::count();
       return view('dashboard.index',compact('users','contacts','cars'));
   }
}
