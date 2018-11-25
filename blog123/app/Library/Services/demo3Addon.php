<?php 
namespace App\Library\Services;
use App\Library\Services\Contract\testInterface;
use App\Library\Services\Contract\testInterfaceDemo3;
use App\Library\Services\Contract\testInterfaceDemo2;
class demo3Addon implements testInterface{
	protected $test;
	protected $demo3;
	public function __construct(testInterface $test,testInterfaceDemo3 $demo3)
	{
		$this->test = $test;
		$this->demo3=$demo3;
	}
	public function doSomeThingI(){
		return $this->test->doSomeThingI().' va '.$this->demo3->doSomeThingI();
	}

}
 ?>
