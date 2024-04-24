<?php

namespace App\Http\Controllers;


use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller

//функция для обработки валидации с ContactRequest
{
    public function submit(ContactRequest $req){
        return 'Данные успешно отправлены';
}




    //Указывается валидация на формы........
//    public function submit(Request $req){
//        $validation = $req->validate([
//            'subject'=>'required|min:5|max:50',
//            'message'=>'required|min:15|max:500'
//            ]);
//    }


    //вывод ключа из формы одиночно
//    public function submit(Request $req){
//        dd($req->input('subject'));
//    }

    //Вывод всех данных как в объекте в js
//    public function submit(Request $req)
//    {
//        dd($req);
//    }

//    public function submit(){
//        return "Good Win-1-22";
//    }
}
