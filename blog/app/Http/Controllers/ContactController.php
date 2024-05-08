<?php

namespace App\Http\Controllers;


use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller

//функция для обработки валидации с ContactRequest
{
    public function submit(ContactRequest $req)
    {
        $contact = new Contact();
        $contact-> name = $req->input('name');
        $contact-> email = $req->input('email');
        $contact-> subject = $req->input('subject');
        $contact -> message = $req->input('message');
        $contact -> save();

        return redirect()->route('home-page')->with('success', 'Your message has been sent');


    }

    public function allData(){
        return view('messages', ['data'=>Contact::all()]);

        #$contact = new Contact;
        #return view('messages', ['data'=>$contact->find(2)]);
        #dd($contact->all());
    }

    public function detailMessage($id){
        $contact = new Contact;
        return view('detail-message', ['data'=>$contact->find($id)]);
    }

    public function updateMessage($id){
        $contact = new Contact;
        return view('update-message',['data'=>$contact->find($id)]);
    }

    public function updateMessageSubmit($id, ContactRequest $req){

        $contact =  Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        //Переадресация на главную страницу после изменения данных
        return redirect()->route('contact-detail', $id)->with('success', 'Успешно обновлено');

    }
    public function deleteMessage($id){
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Успешно удалено');
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
