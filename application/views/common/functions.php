<?php 
	function images_path($file=''){
		echo $file!=''? "images/$file":"images" ;	
	}
	
	function current_controller($controller = ''){
		$url = $_SERVER['REQUEST_URI'];
		return strstr($url,$controller);
	}
	
	function download($file) {
		$file = base_url("uploads/$json_data");
		if (file_exists($file)) {
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename='.basename($file));
			header('Expires: 0');
			header('Cache-Control: must-revalidate');
			header('Pragma: public');
			header('Content-Length: ' . filesize($file));
			readfile($file);
			exit;
		}
	}
?>