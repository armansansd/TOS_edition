<?php
//allow https access
header('Access-Control-Allow-Origin: *');
//lib Michelf (md->html)
spl_autoload_register(function($class){
    require preg_replace('{\\\\|_(?!.*\\\\)}', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php';
});
use \Michelf\Markdown;





//list all the file with curl and the github api
$url_json = "https://api.github.com/repos/armansansd/timing_edition/contents";
$output = shell_exec('curl '.$url_json.' > git_json_content.json');
$string = file_get_contents("git_json_content.json");
$json = json_decode($string,true);


for ($i = 0 ; $i<count($json) ; $i++){
	//array_push($ls_article, $json[$x].['name']);
	$url = "https://raw.githubusercontent.com/armansansd/timing_edition/master/".$json[$i]['name'];
	$md = file_get_contents($url);
	$text = Markdown::defaultTransform($md);
	echo "<p>".$text."</p>";
}

