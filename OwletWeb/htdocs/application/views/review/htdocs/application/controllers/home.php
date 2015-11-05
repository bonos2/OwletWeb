<?php
class Home extends Controller
{
	public function init()
	{
		require 'application/views/_templates/header.php';
		require 'application/views/home/index.php';
		require 'application/views/_templates/footer.php';
	}
}
?>