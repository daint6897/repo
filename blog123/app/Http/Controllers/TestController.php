<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Library\Services\demo1;
// use App\Providers\testServiceContainer;
use App\Library\Services\Contract\testInterface;
use App\Library\Services\Contract\testInterfaceDemo1;
class TestController extends Controller
{
	protected $test;
	public function __construct(testInterface $test){
		$this->test = $test;
	}
    public function TestController(){
    	echo $this->test->doSomeThingI();
    }
   
}
