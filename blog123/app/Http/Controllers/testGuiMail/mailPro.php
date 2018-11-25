<?php
namespace App\Http\Controllers\testGuiMail;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\testGuiMail\LaravelMailer; 
use App\Library\Services\Notify;
// use App\Http\Controllers\testGuiMail\LaravelMailer\Notify;
class mailPro extends Controller
{
    private $notifier;
    
    public function showEmailForm()
    {
    	return view('email.sendMail');
    }
    public function __construct(Notify $notifier)
    {
        $this->notifier = $notifier;
    }
    /**
     * Send an e-mail reminder to the user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function sendEmailReminder(Request $request, $id=2)
    {
        $user = User::findOrFail($id);

        $this->notifier->send('Your Reminder!', 'email.welcome', $user);
    }
}
