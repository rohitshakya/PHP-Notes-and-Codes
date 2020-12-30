<?php

function tags($v){
	$a = array();
	foreach ($v as $vv => $val) {
		$a[$vv] = trim(strip_tags($val));
	}
	return $a;
}

function unique_multidim_array($array, $key){
	$temp_array = array();
	$i = 0;
	$key_array = array();

	foreach ($array as $val) {
		if (!in_array($val[$key], $key_array)) {
			$key_array[$i] = $val[$key];
			$temp_array[$i] = $val;
		}
		$i++;
	}
	return $temp_array;
}

function color($str){
	$color = get_string_between($str, '@', '@');
	$clr = '@' . $color . '@';
	return str_replace($clr, "style='color:$color;'", $str);
}

function get_string_between($string, $start, $end){
	$string = ' ' . $string;
	$ini = strpos($string, $start);
	if ($ini == 0) return '';
	$ini += strlen($start);
	$len = strpos($string, $end, $ini) - $ini;
	return substr($string, $ini, $len);
}

function html_decode($string){
	preg_match('@src="([^"]+)"@', $string, $match);
	$src = array_pop($match);
	if ($src != '') {
		return "<img src='".base_url($src)."' class='questionImg' />";
	} else {
		$char = array("<@br>", "&lt;@br&gt;", '&nbsp;');
		#$tag = strip_tags(str_replace($char, array('<br>', '<br>', ''), $string), "<strong><em><br><span><i><b><u>");
		$tag = strip_tags(str_replace($char, array('<br>','<br>',''), $string), "<br><i><em><b><u></u><strong></strong><span><sup><sub><ol><ul><li></li>");
		$tt = preg_replace("/\r|\n/", " ", $tag);
		#return html_entity_decode(trim($tt), ENT_QUOTES);
		return html_entity_decode(htmlentities(trim($tt), ENT_QUOTES));
	}
	
}

function removeSpace($str){
	return preg_replace('/\s+/', ' ', html_entity_decode(htmlspecialchars($str, ENT_QUOTES)));
}


function custom_compare($a, $b){
    global $order;
    $pos_a = array_search($a['cat_id'], $order);
    $pos_b = array_search($b['cat_id'], $order);
    if($pos_a === false && $pos_b === false) { 
        return 0;                      // a == b
    }
    else if ($pos_a === false) {           
        return 1;                      // $a > $b
    }
    else if ($pos_b === false) {         
        return -1;                     // $a < $b
    }
    else {
		return $pos_a - $pos_b;
    }
}

function getSortOrder($c) {
    $sortOrder = array("mcq","tnf","mch","fib","drag");
    $pos = array_search($c, $sortOrder);
    return $pos !== false ? $pos : 99999;
}

function custom_type_sort($a,$b) {	
    if( getSortOrder($a) < getSortOrder($b) ) {
        return -1;
    }elseif( getSortOrder($a) == getSortOrder($b) ) {
        return 0;
    }else {
        return 1;
    }
}

function xss_clean_trim($string){
    $CI = &get_instance();
    $string = $CI->security->xss_clean(html_escape(trim($string)));
    return $string;
}

function xss_clean_trim_escape($string){
    $CI = &get_instance();
    $string = xss_clean_trim($string);
    $DB = & DB();
    $string = $DB->escape_str(trim($string));
    return $string;
}

function API_connector($api, $apidata=""){
	$handleInt = curl_init($api);
	
	curl_setopt_array($handleInt, array(
		CURLOPT_URL => $api,
		CURLOPT_POSTFIELDS => $apidata,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_HTTPHEADER => array(
			"cache-control: no-cache"
		),
	));
	$returnApiData = json_decode(curl_exec($handleInt));
	curl_close($handleInt);
	return $returnApiData;
}