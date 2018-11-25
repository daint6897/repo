<?php

namespace App\Library\Services;
interface Notify{
		public function send($subject,$template,$data);
}
 ?>