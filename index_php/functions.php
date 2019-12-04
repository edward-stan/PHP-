<?php
function get_ext($filename) {
	$ext = substr($filename,strrpos($filename,'.'));
	return($ext);
}

function make_dirs($dir){
	$dirs = explode('/',trim($dir,'/'));
	$tmpdir = '';
	foreach($dirs as $v) {
		$tmpdir .= $v . '/';
		if (!is_dir($tmpdir))mkdir($tmpdir);
	}
}

function upfile($file){
	$ext = get_ext($file['name']);

	if(!in_array(strtolower($ext),array('.jpg','.png'))){
		exit('<script>alert("上传文件类型不允许");history.back();</script>');
	}
	$newfilename = date("YmdHis").rand(1000,9999).$ext;
	$dir = 'uploads/'.date("Y/m/");
	make_dirs($dir);
	$newfilename = $dir.$newfilename;
	move_uploaded_file($file['tmp_name'],$newfilename);
	return($newfilename);
}