<?php
/*
 * review.php
 * @author : Youn JS
 * Review 페이지의 Controller
 * @method
 * init($code) : 페이지를 초기화한다. @parms $code : 상점의 코드값
 */
class Review extends Controller {
	private $session = null;
	public function init($code) {
		$this->session = $code;
		$model = $this->loadModel ( 'ReviewModel' );
		$ImageArrayList = $model->getImageUrl ($this->session);
		$DataArrayList = $model->loadData($this->session);
		require 'application/views/_templates/header.php';
		require 'application/views/review/review.php';
		require 'application/views/_templates/footer.php';

	}
	public function insert(){
		$notice = "insert Acrtion" ;
		echo "<script>console.log(\"" . $notice . "\");</script>";
		$model = $this->loadModel('ReviewModel');
		$_name = $_POST ["_name"];
		$_score = $_POST ["_score"];
		$_content = $_POST ["_content"];
		$_code = $_POST["_code"];

		echo $_name, $_score, $_content;
		$result = $model->insert($_name,$_score,$_content,$_code); //나중에 객체로 바꾸자
		return true;
		
	}
	public function add(){
		
	}
}


?> 