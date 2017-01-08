<?php 

// to get categories

function get_categories_main(){
	
	$CI = get_instance();
	$categories= $CI->Products_model->get_categories();
	return $categories;
	
	
}

function get_most_popular_main(){
	
	$CI = get_instance();
	$mostpopular= $CI->Products_model->get_most_popular();
	return $mostpopular;
	
	
}


?>