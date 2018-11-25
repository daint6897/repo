<?php 
namespace App\Library\Services;
use App\Library\Services\Contract\testInterface;
use App\Library\Services\Contract\testInterfaceDemo2;
class demo2Addon implements testInterface{
	protected $test;
	protected $demo2;
	public function __construct(testInterface $test,testInterfaceDemo2 $demo2)
	{
		$this->test = $test;
		$this->demo2=$demo2;
	}
	public function doSomeThingI(){
		return $this->test->doSomeThingI().' va '.$this->demo2->doSomeThingI();
	}

}
 ?>


