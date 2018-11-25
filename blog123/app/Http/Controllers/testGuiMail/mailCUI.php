<?php

namespace App\Http\Controllers\testGuiMail;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Mail\Mailable;
use Mail;
use App\Mail\sendEmailCui;
use App\Models\Mail\testMail1;
class mailCUI extends Controller
{
    public function showEmailForm()
    {
    	return view('email.sendMail');
    }
    public function sendEmail(request $request,$id=2)
    {
    	// echo $request->emailAdd;
    	// // config(['mail.driver' => 'smtp', 'mail.host' => 'smtp.gmail.com', 'mail.port' => 597, 'mail.username' => 'nguyentiendai97@gmail.com', 'mail.password' => 'mqxvzkvaovtuxksn', 'mail.encryption' => 'tls']);
    	
    	// $mailable = new sendEmailCui();
	    // Mail::to($request->emailAdd)->send($mailable);

	    $user = testMail1::findOrFail($id);
	    Mail::send('email.welcome',['user'=>$user],function($m) use ($user) {
	    	$m->from('nguyentiendai97@gmail.com');
	    	$m->to($user->email,$user->user)->subject('nhac nhp');
	    });
	         
    }
}
