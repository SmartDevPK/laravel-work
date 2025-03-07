<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm()
    {
        return view("layout.contact");
    }

    public function submitForm(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'message' => 'required|string',
        ]);

        return redirect("/contact")->with("success", "Your message has been sent successfully!");
    }
}
