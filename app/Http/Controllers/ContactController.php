<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function contact(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:contacts',
            'phone' => 'required|unique:contacts',
            'city' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact = Contact::create([
            'name' => $validate['name'],
            'email' => $validate['email'],
            'phone' => $validate['phone'],
            'city' => $validate['city'],
            'subject' => $validate['subject'],
            'message' => $validate['message'],
        ]);
        
        return redirect()->back()->with(['success' => 'Terima kasih pesan anda telah terkirim, kami akan segera menghubungi anda']);
    }
}
