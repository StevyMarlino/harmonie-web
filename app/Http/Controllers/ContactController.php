<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $data = [
            'title' => "Contact",
        ];
        return view('contact.index', $data);
    }

    public function send(ContactRequest $request)
    {
        try {
            
            $request = $request->all();
            $email = setting('site.support') ?? "stevyabessolo@gmail.com";

            // send email to the
            Mail::to($email)->send(new ContactMail($request));

            return redirect()->back()->with('message', 'Votre message à été pris en comte ! Nous vous recontacterons.');
        } catch (\Exception $e) {
            return redirect()->back()->with('erreur', $e->getMessage());
        }
    }
}