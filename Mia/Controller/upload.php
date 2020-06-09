<?php

// Upload destination folder
$GLOBALS['destFolder'] = 'files';

error_reporting(-1); // report ALL the errors.

function bytesToSize1024($bytes) {
	$unit = array('B','KB','MB');
	return @round($bytes / pow(1024, ($i = floor(log($bytes, 1024)))), 1).' '.$unit[$i];
}

if (isset($_FILES['myfile'])) {
	$sFileName = $_FILES['myfile']['name'];
	$sFileType = $_FILES['myfile']['type'];
	$sFileSize = bytesToSize1024($_FILES['myfile']['size']);
    move_uploaded_file($_FILES['myfile']['tmp_name'], $GLOBALS['destFolder'].'/'.$sFileName);
    print_r($_FILES['myfile']['tmp_name']);
    echo '<script language=javascript> alert("Success")</script>';
    /*echo "<script language=javascript>
    alert(
		'Your file: {$sFileName} has been successfully received. (<a href="{$GLOBALS['destFolder']}/{$sFileName}">link</a>)<br/>
		Type: {$sFileType}<br/>
		Size: {$sFileSize}')
</script>";*/
} else {
	echo '<script language=javascript> alert("Failed")</script>';
}