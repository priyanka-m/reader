<?php

OCP\Util::addscript( 'reader', 'integrate' );
OCP\Util::addscript( 'reader', 'pdf' );
OCP\Util::addStyle('reader','reader');
<<<<<<< HEAD
OCP\Util::addStyle('files','files');
=======
>>>>>>> e6b5cb58f3a4bf748f85c9a6fcd258e7f6507ddf

$file = $_GET['file'];
$path = dirname($file);
$filename = basename($file); 

$tmpl = new OCP\Template( 'reader', 'results', 'user' );
$tmpl->assign('file', $file);
$tmpl->assign('path', $path);
$tmpl->assign('filename', $filename);
$tmpl->printPage();

?>
