<?php

/**
* ownCloud - eBook reader application
*
* @author Priyanka Menghani
* 
*/

OCP\User::checkLoggedIn();
OCP\App::checkAppEnabled('reader');
OCP\App::setActiveNavigationEntry( 'reader_index' );

OCP\Util::addscript( 'reader', 'integrate' );
OCP\Util::addscript( 'reader', 'pdf' );
OCP\Util::addStyle('reader','reader');
<<<<<<< HEAD
OCP\Util::addStyle('files','files');
=======
>>>>>>> e6b5cb58f3a4bf748f85c9a6fcd258e7f6507ddf

// Get the current directory from window url.
$dir = empty($_GET['dir'])?'/':$_GET['dir'];

$tmpl = new OCP\Template( 'reader', 'index', 'user' );
$tmpl->assign('dir', $dir);
$tmpl->printPage();

?>
