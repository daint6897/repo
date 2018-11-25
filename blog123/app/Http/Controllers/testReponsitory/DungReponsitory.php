<?php
namespace App\Http\Controllers\testReponsitory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Library\Services\Contract\testReponsitoryInterface;

class DungReponsitory extends Controller
{
	protected $reponsitory;

	public function __construct(testReponsitoryInterface $reponsitory)
	{
		$this->reponsitory = $reponsitory;
	}
	public function TestController(){
		$ListEmail = $this->reponsitory->listMail();
		foreach ($ListEmail as $value) {
			echo $value->email;
			echo "<br>";
		}


	}

    
}
