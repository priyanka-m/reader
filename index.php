<?php

/**
* ownCloud - eBook reader application
*
* @author Priyanka Menghani
* 
* This library is free software; you can redistribute it and/or
* modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
* License as published by the Free Software Foundation; either 
* version 3 of the License, or any later version.
* 
* This library is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU AFFERO GENERAL PUBLIC LICENSE for more details.
*  
* You should have received a copy of the GNU Lesser General Public 
* License along with this library.  If not, see <http://www.gnu.org/licenses/>.
* 
*/

OCP\User::checkLoggedIn();
OCP\App::checkAppEnabled('reader');
OCP\App::setActiveNavigationEntry( 'reader_index' );

OCP\Util::addStyle( 'files', 'files' );
OCP\Util::addscript( 'reader', 'integrate' );

// Get the current directory from window url.
$dir = empty($_GET['dir'])?'/':$_GET['dir'];

$tmpl = new OCP\Template( 'reader', 'index', 'user' );
$tmpl->assign('dir', $dir);
$tmpl->printPage();

?>
