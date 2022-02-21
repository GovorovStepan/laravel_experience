<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactsRequest;
use App\Models\Contacts;

class ContactsController extends Controller
{
    /*
      Метод валидации и сохранения записи в бд
    */
    public function submit(ContactsRequest $request) {
      $contact = new Contacts();
      $contact->name = $request->input('name');
      $contact->email = $request->input('email');
      $contact->theme = $request->input('theme');
      $contact->message = $request->input('message');

      $contact->save();
      //редиректим на главную страницу
      return redirect()->route('home')->with('success', 'Message was send');
    }

    /*
      Метод получающий все записи из та блицы бд
    */
    public function allData(){
        $contact = new Contacts();

        return view('messages',['data'=>$contact->all()] );
    }
}
