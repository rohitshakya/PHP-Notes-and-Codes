 <?php  

	error_reporting(E_ALL);
	ini_set('display_startup_errors', 1);
	

	$sites = realpath(dirname(__FILE__)).'/where_folder2/';

	$newfile = $sites.$filnme_epub.".js";

	if (file_exists($newfile)) {
		$fh = fopen($newfile, 'wb');
		fwrite($fh, 'd');
	} else {
		$fh = fopen($newfile, 'wb') or die("Can't create file");
		fwrite($fh, 'd');
	}

	fclose($fh);
	chmod($newfile, 0777);

	echo (is_writable($filnme_epub.".js")) ? 'writable' : 'not writable';
	echo "<br>";
	echo (is_readable($filnme_epub.".js")) ? 'readable' : 'not readable';
	die;

?> 
