<?php

function splitDate($d){
	$a=explode("/", $d);
	return $a[1].'/'.$a[0].'/'.$a[2];
}

function showArray($var) {
	echo "<pre>";
		print_r($var);
	echo "</pre>";

}
function splittag($tag) {
	$t = split(',', $tag);
	return ($t);
}
function removeAllSpace($str){
	return $string_not_have_space = preg_replace('/\s+/', '', $str);
}
function printtable_sqlite($results){

	$tcolumn = $results['count'];
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";

	echo "sss"."$tcolumn";
	$h='';
	$cols=array();
	for ($counter = 0; $counter < $tcolumn; $counter ++) {
		$meta = $results->getColumnMeta($counter);
		$h.='<th>'.$meta['name'].'</th>';
	}   

	$r='';
	foreach ($results as $dr) {

		$r.='<tr>';
		for ($i = 0; $i < $tcolumn; $i ++) {
			$r.='<td>'.$dr[$i].'</td>';
		}
		$r.='</tr>';
	}

	$h='<thead>'.$h.'</thead>';
	$s.='<table class="tblreport table table-hover">'.$h.$r;
	$s.='</table>';

	return $s;

}
?>