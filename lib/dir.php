<?php
<<<<<<< HEAD
	function explore($current_dir,$sub_dirs,$num_of_results) {
=======
	function explore($current_dir,$sub_dirs) {
>>>>>>> e6b5cb58f3a4bf748f85c9a6fcd258e7f6507ddf
		$return = array();
		// Search for pdfs in sub directories.
		foreach ($sub_dirs as $dir) {
			$pdfs = \OC_FileCache::searchByMime('application', 'pdf', '/'.\OCP\USER::getUser().'/files'.$current_dir.$dir.'/');
			sort($pdfs);
<<<<<<< HEAD
			$max_count = min(count($pdfs),$num_of_results);
			$thumbs = array();
			for ($i = $max_count - 1; $i >= 0; $i--) {
				if (!in_array($pdfs[$i],$thumbs)) 
					$thumbs[] = $pdfs[$i];
			}
=======
			$thumbs = array();
			$count = 1;
			foreach ($pdfs as $pdf) {
				// We need only 3 pdf pages to create thumbnails for folders. 
				if ($count <= 3) {
					// Store the urls in an array.
					$thumbs[] = $pdf;
					$count++;
				} 
			}
			// Return the directory and contained pdfs(any 3).
>>>>>>> e6b5cb58f3a4bf748f85c9a6fcd258e7f6507ddf
			$return[] = array($dir,$thumbs); 
		}
		return $return; 
	}
<<<<<<< HEAD
	
=======
>>>>>>> e6b5cb58f3a4bf748f85c9a6fcd258e7f6507ddf
?>
