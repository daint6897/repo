<?php 
namespace App\Library\Services;
use App\Library\Services\Contract\testInterface;
use App\Library\Services\Contract\testInterfaceDemo1;
use App\Library\Services\Contract\testInterfaceDemo2;
class demo1Vademo2 implements testInterface{
	protected $demo1;
	protected $demo2;
	public function __construct(testInterfaceDemo1 $demo1,testInterfaceDemo2 $demo2){
		$this->demo1 = $demo1;
		$this->demo2 = $demo2;
	}
	public function doSomeThingI(){
		return $this->demo1->doSomeThingI().'-va-'.$this->demo2->doSomeThingI();
		// return "ahihi do ngoc";
	}
}
 ?>
