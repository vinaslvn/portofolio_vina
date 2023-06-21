<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //

    function show(){
        $data['contact'] = Contact::all();
        return view('contact',$data);
    }

    function add(){
        $data=[
            'action'=>url('contact/create'),
            'tombol'=>'simpan',
            'contact'=>(object)[
                'id'=>'',
                'nama'=>'',
                'email'=>'',
                'pesan'=>'',
            ],
        ];
        return view('portofolio',$data);
    }

    function create(Request $req){
        Contact::create([
            'id' => $req->id,
            'nama' => $req->nama,
            'email' => $req->email,
            'pesan' => $req->pesan,
        ]);
        return redirect('profil');
    }
    function delete($item){
        $contact = Contact::where('id', $item)->first();
        $contact->delete();
        return redirect('contact');
    }

}
