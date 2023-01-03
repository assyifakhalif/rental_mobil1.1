<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Car;

class HomeController extends Controller
{
    public function index()
    {
        $cars = Car::latest()->get();
        return view('frontend.homepage' , compact('cars'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function contactStore(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'pesan' => 'required',
        ]);

        Message::create($data);

        return redirect()->back()->with(['message' => 'Pesan berhasil dikirim', 'alert-type' => 'success']);
    }

    public function detail(Car $car)
    {
        return view('frontend.detail ', compact('car'));
    }
}
