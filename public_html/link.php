<?php
function hyperlink() {
    $url = $_GET['link'];
    if(isset($url)) {
        $path = $_SERVER['DOCUMENT_ROOT'] . '/' . $url;
    } else {
        $path = $_SERVER['DOCUMENT_ROOT'] . '/' . 'main.php';
    }
    
    return $path;
}
$link = hyperlink();

function rand_read_write_order_compare_y6() {
	$a = rand(0,5);
	switch($a) {
		case 0:
			size_order_words();
		case 1:
			_order_size_order();
		case 2:
			count_in_whole_steps();
		case 3:
			words_write_in_numerals();
		case 4:
			write_numerals_in_words();
		case 5:
			more_or_less_than();


	}
}

?>

