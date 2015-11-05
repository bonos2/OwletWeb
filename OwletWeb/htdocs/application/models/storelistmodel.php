<?php
class StoreListModel {
	public $db = null;
	public function __construct($DBConnection) {
		try {
			$this->db = $DBConnection;
		} catch (mysqli_sql_exception $e) {
			exit('데이터베이스 연결에 오류가 발생했습니다.');
		}
	}
	/*
	 *  @author : Young TY
	 *  @Get the all of store number
	 *  @last modification 11/3 Am 3:28
	 */
	public function getStoreList(){
		/* 등록된  store개수 */
		$query = "select code from Stores order by code desc";
		$result = mysqli_query($this->db,$query);
		$store_all_count = mysqli_fetch_assoc($result);
		return $store_all_count['code'];
	}	
	public function getStoreName($all_number){
		$query = "select name from Stores order by code asc";
		$result = mysqli_query($this->db,$query);
		$store_name=[];
		for($i = 0; $i < $all_number; $i++){
			$tmp = mysqli_fetch_assoc($result);
			array_push($store_name, $tmp);
		}
		return $store_name;
	}
	public function getStoreImageUrl($all_number,$store_name){
		$query = "select s.code, i.url from stores s, store_image_map si, image i where s.code = si.code and i.nindex = si.nindex";
		$store_img=[];
		for($i = 1; $i <= $all_number; $i++){
			$result = mysqli_query($this->db, "select s.code, i.url from stores s, store_image_map si, image i where s.code = si.code and i.nindex = si.nindex and si.code = ".$i." order by i.nindex asc");
			$tmp = mysqli_fetch_assoc($result);
			array_push($store_img,$tmp);
			?><a href="http://192.168.43.239/review/init/<?php echo $i ?>">
			  <img src = <?php echo $store_img[$i-1]['url'];?> />
			  </a>
		      <br>
			  <tr><?php echo $store_name[$i-1]['name'];?></tr>
			  <br><br>
			<?php 
			
		}
		
		return $store_img;
	}
}
?>
