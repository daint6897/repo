<?php 
namespace App\Library\Services;
use App\Models\Mail\testMail1;
use App\Library\Services\Contract\testReponsitoryInterface;
class testReponsitoryListMail implements testReponsitoryInterface{
	private $model;

	public function __construct(testMail1 $model){
		$this->model = $model;
	}
	public function listMail(){
		return $this->model->get();
	}
}

?>