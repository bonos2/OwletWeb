<?php
class StoreList extends Controller {
	public function init(){
		$model = $this->loadModel ( 'StoreListModel' );
		$store_all_number = $model->getStoreList ();
		$store_name = $model->getStoreName($store_all_number);
		$store_img = $model->getStoreImageUrl($store_all_number,$store_name);
		
		require 'application/views/_templates/header.php';
		require 'application/views/storelist/storelist.php';
		require 'application/views/_templates/footer.php';
	}
	
}
?>
