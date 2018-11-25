<?php 
namespace App\Library\Services;
use App\Library\Services\Contract\testInterface ;

use App\Library\Services\Contract\testInterfaceDemo1;
class demo1Only implements testInterface{
	protected $demo1;
	public function __construct(testInterfaceDemo1 $demo1){
		$this->demo1=$demo1;
	}
	public function doSomeThingI(){
		return $this->demo1->doSomeThingI();
	}
}
 ?>