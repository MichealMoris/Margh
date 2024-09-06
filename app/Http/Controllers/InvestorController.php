<?php

namespace App\Http\Controllers;

use App\Mail\InvestorGuideMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InvestorController extends Controller
{
    public function sendMail(Request $request)
    {
       $data = [
           'name' => $request->name,
           'email' => $request->email,
           'phone' => $request->phone,
       ];

       $filePath = public_path('files/InvestorGuide.pdf');
       $fileName = "InvestorGuide.pdf";
       Mail::to('m.mohsen@margh-eg.com')->send(new InvestorGuideMail($data));
       return response()->download($filePath, $fileName);
    }
}
