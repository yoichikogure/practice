<?php
$dir_list = array();	// Array to hold all subdirectories in the target directory
$file_list = array();	// Array to hold all files in the target directory
if ($dh = @opendir('.')) 	// Open target directory
{
	while (($file = readdir($dh)) !== false)  // Must use '!=='
	{
		if ($file{0}!='.') 	// Exclude '.' and '..'
		{
		 	if (is_dir($target_dir.$file))
				$dir_list[] = $file;
		 	else
				$file_list[] = $file;
		}
	}
	closedir($dh);	// Close the opened directory
}
// Sort the list of files and directories
sort($dir_list);
sort($file_list);

header('Content-type: text/html; charset=utf-8');
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Prueba de Aplicaciones Web</title>
</head>
<body>
	<h1>Prueba de Aplicaciones Web</h1>
	<h2>Por favor, únase al desarrollo!</h2>
	<p>Lista de archivos <input type='button' value='Recargar' onclick='location.reload()'></p>
	<ul>
	<?php
	foreach ($file_list as $file)
	{
		$f = htmlspecialchars($file);
		echo "<li><a href='$file'>$f</a></li>";
	}
	?>
	</ul>
</body>
</html>