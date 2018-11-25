<?php
namespace App\Http\Controllers\testGuiMail;

	interface Notify{
		public function send($subject,$template,$data);
	}
 ?>