<?php
namespace App\Http\Controllers\testGuiMail;
use App\App\Library\Services\Notify;
use Mail;


class LaravelMailer implements Notify
{
	public function send($subject, $template, $data)
	{
		 Mail::send($template, ['user' => $data], function ($m) use ($data) {
             $m->from('nguyentiendai97@gmail.com', 'Your Application');

             $m->to($data->email, $data->name)->subject($subject);
         });


     //    $user = testMail1::findOrFail($id);
	    // Mail::send('email.welcome',['user'=>$user],function($m) use ($user) {
	    // 	$m->from('nguyentiendai97@gmail.com');
	    // 	$m->to($user->email,$user->user)->subject('nhac nhp');
	    // });
	}
}
 