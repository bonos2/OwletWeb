<?php
/*
 * ReviewModel.php
 * @author : Youn JS
 * ReviewController에서 사용하는 Model이다.
 *
 */
class ReviewModel {
	public $db = null;
	public function __construct($DBConnection) {
		try {
			$this->db = $DBConnection;
		} catch ( mysqli_sql_exception $e ) {
			exit ( '데이터베이스 연결에 오류가 발생했습니다.' );
		}
	}
	/*
	 * getImageUrl
	 * 상점의 code로 image의 url을 알아낸다.
	 * @parms : int code
	 * @return : ArrayList ( Element : code, url )
	 */
	function getImageUrl($code) {
		$query = "select s.code, i.url from stores s, store_image_map si, image i where s.code = si.code and i.nindex = si.nindex";
		
		$result = mysqli_query ( $this->db, "select s.code, i.url from stores s, store_image_map si, image i where s.code = si.code and i.nindex = si.nindex and si.code = " . $code . "" );
		$arrayList = new ArrayObject ();
		for($i = 0; $i < $result->num_rows; $i ++) {
			$tmp = mysqli_fetch_array ( $result );
			$arrayList->append ( $tmp );
		}
		return $arrayList;
	}
	/*
	 * insert
	 * 상점에 관한 리뷰를 입력한다
	 * @return : boolean false : 실패 true : 성공
	 */
	function insert($_name, $_score, $_content, $_code) {
		$query = "INSERT INTO reply values(\"\",\"" . $_content . "\",\"" . $_name . "\"," . $_score . "," . $_score . "," . $_score . ",now()," . $_code . ")";
		$result = mysqli_query ( $this->db, $query );
		echo "<script>console.log(\"" . $query . "\");</script>";
		if ($query)
			echo "succec!";
		else
			echo "false";
		return true;
	}
	function loadData($code) {
		echo "loadData";
		$query = "SELECT * FROM reply WHERE code = " . $code;
		echo "<script>console.log(\"" . $query . "\");</script>";
		$result = mysqli_query ( $this->db, $query );
		$arrayList = new ArrayObject ();
		for($i = 0; $i < $result->num_rows; $i ++) {
			$tmp = mysqli_fetch_array ( $result );
			$arrayList->append ( $tmp );
		}
		
		return $arrayList;
	}
}