<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Store;


class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.page.dashboard');
    }

    public function contact(){
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.page.contact', compact('contacts'));
    }
}
