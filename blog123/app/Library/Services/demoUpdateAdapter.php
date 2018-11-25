<?php 
namespace App\Library\Services;
use App\Library\Services\Contract\testInterface;
class demoUpdateAdapter implements testInterface{
	protected $client;
	protected $test;

	public function __construct(testInterface $test,demoUpdate $client)
	{
		$this->client = $client;
		$this->test = $test;
	}
	public function doSomeThingI(){
		return $this->client->doSomeThingUpdate().$this->test->doSomeThingI();
	}


}
?>