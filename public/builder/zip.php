<?php

set_time_limit(0);
$skeleton_header = '<!DOCTYPE html>
<html class="no-js" lang="en">
<head> 
  <meta charset="UTF-8">
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
  <title>Your title</title>
  <!-- bootstrap css placed in /bootstrap folder -->
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" >
  <!-- animate.css for wow.js fonts -->
  <link rel="stylesheet" type="text/css" href="css/animate.css" >
  <!-- utility.css -->
  <link rel="stylesheet" type="text/css" href="css/utility.css">
  <!-- slideshow.css --> 
  <link rel="stylesheet" type="text/css" href="css/slideshow.css">
  <!-- style -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- usertweak -->
  <link rel="stylesheet" type="text/css" href="css/usertweak.css">
  <!-- custom code in below file -->
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  <!-- ionicons -->
  <link rel="stylesheet" type="text/css" href="fonts/ionicons.css" >
  <!-- lightbox plugin -->
  <link rel="stylesheet" type="text/css" href="css/lightGallery.css" >
  <!-- google fonts -->';

	/* CONFIG */
	
	$pathToAssets = array("../bootstrap","../css","../js","../img","../fonts");
	 if(isset($_POST["htmlonly"]) && trim($_POST["htmlonly"]) != "") { 
	 	$pathToAssets = null;
	 	$skeleton_header = '<!DOCTYPE html>
<html class="no-js" lang="en">
<head> 
  <meta charset="UTF-8">
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
  <title>Your title</title>
  <!-- bootstrap css placed in /bootstrap folder -->
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" >
  <!-- animate.css for wow.js fonts -->
  <link rel="stylesheet" type="text/css" href="css/animate.css" >
  <!-- utility.css -->
  <link rel="stylesheet" type="text/css" href="css/utility.css">
  <!-- slideshow.css --> 
  <link rel="stylesheet" type="text/css" href="css/slideshow.css">
  <!-- style -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- usertweak -->
  <link rel="stylesheet" type="text/css" href="css/usertweak.css">
  <!-- custom code in below file -->
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  <!-- ionicons -->
  <link rel="stylesheet" type="text/css" href="fonts/ionicons.css" >
  <!-- lightbox plugin -->
  <link rel="stylesheet" type="text/css" href="css/lightGallery.css" >
  <!-- google fonts -->';
	
	}

	$filename = $_POST['websitename'].".zip";
	
	$successfile;
	if($_POST['usertweak']!=""){

		$newFileContent = stripslashes($_POST['usertweak']);

		$successfile = false;	
		
		$cssfilename = 'usertweak';

		$newFileName = '../css/'.$cssfilename.".css";
		
		if(file_put_contents($newFileName,$newFileContent)!=false){
			$successfile = true;
			
		}else{
			$successfile = false;
			
		}
	}
	else{
		
		$successfile = true;
		
	}


	/* END CONFIG */


	$skeleton_footer = stripslashes(file_get_contents("skeleton_footer.html"));	

	if( $successfile!=false){
	$zip = new ZipArchive();
	
	$zip->open($filename, ZipArchive::CREATE);
	
	
	//add folder structure
		if($pathToAssets!= null){


			foreach( $pathToAssets as $thePath ) {
					
						// Create recursive directory iterator
						$files = new RecursiveIteratorIterator(
					    	new RecursiveDirectoryIterator( $thePath ),
					    	RecursiveIteratorIterator::LEAVES_ONLY
						);
					
						foreach ($files as $name => $file) {
						
							if( $file->getFilename() != '.' && $file->getFilename() != '..' ) {
					
					    		// Get real path for current file
					    		$filePath = $file->getRealPath();
					    
					    		$temp = explode("/", $name);
					    
					    		array_shift( $temp );
					    
					    		$newName = implode("/", $temp);
					    		
					    		// Add current file to archive
					    		$zip->addFile($filePath, $newName);
					    	
					    	}
					    
						}
					
				}
			}	

	
	


			
	foreach( $_POST['pages'] as $page=>$content ) {
	
			$ter = str_replace( "&quot;" ,"'", stripslashes($content));
			
			$zip->addFromString($page.".html", $skeleton_header.$_POST['fontlist']."\n </head> \n <body class='omg'> \n\n".$ter."\n".$skeleton_footer);
		
	
	}
	
	$zip->addFile('../send.php','send.php'); 
	$zip->close();
	
	
	$yourfile = $filename;
	
	$file_name = basename($yourfile);
	
	header("Content-Type: application/zip");
	header("Content-Transfer-Encoding: Binary");
	header("Content-Disposition: attachment; filename=$file_name");
	header("Content-Length: " . filesize($yourfile));
	
	readfile($yourfile);
	
	unlink($yourfile);

	
	exit;
}	
?>