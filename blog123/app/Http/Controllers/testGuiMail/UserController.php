<?php

namespace App\Http\Controllers\testGuiMail;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
//1. Tạo hợp đồng chung:
interface Notify{
	public function send($subject,$template,$data);
}
//2. Định nghĩa biến thể:
class LaravelMailer implements Notify{
	public function send($subject,$template,$data){
		Mail::send($template, ['user' => $data], function ($m) use ($data) {
	         $m->from('nguyentiendai97@gmail.com', 'Your Application');

	         $m->to($data->email, $data->name)->subject($subject);
	     });
	}
}
//3. Inject hợp đồng chung vào class:
class UserController extends Controller
{
    private $notifier;
    public function __construct(Notify $notifier)
    {
        $this->notifier = $notifier;
    }
    
    public function sendEmailReminder(Request $request, $id)
    {
        $user = TestMail::findOrFail($id);

        $this->notifier->send('Your Reminder!', 'emails.reminder', $user);
    }
}
