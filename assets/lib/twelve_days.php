<?php

	function console_log( $data ){
		echo '<script>';
		echo 'console.log('. json_encode( $data ) .')';
		echo '</script>';
	}

function getTitle() {
	return '12 Days of Christmas';
}

function getLyrics() {

	$days = array('first','second', 'third','fourth','fifth','sixth','seventh','eight','ninth','tenth','eleventh','twelfth',);

	$gifts = array(
		'A partridge in a pear tree',
		'Two turtle doves',
		'Three French hens',
		'Four calling birds',
		'Five golden rings',
		'Six geese a-laying',
		'Seven swans a-swimming',
		'Eight maids a-milking',
		'Nine ladies dancing',
		'Ten lords a-leaping',
		'Eleven pipers piping',
		'Twelve drummers drumming'
	);

	$temp_gift_lyrics = ' ';
	foreach ($days as $day_ctr => $day) {

		if($day_ctr == 0)
			$lyrics = '<p>On the ' . $day . ' day of Christmas, my true love sent to me, <br />' . lcfirst($gifts[$day_ctr]) . '.</p>';
		else{
			$temp_gift_lyrics = lcfirst($gifts[$day_ctr]) . ', <br />' . lcfirst($temp_gift_lyrics);
			$gift_lyrics = $temp_gift_lyrics . ' and ' . lcfirst($gifts[0]);
			$lyrics = '<p>On the ' . $day . ' day of Christmas, my true love sent to me, <br />' . $gift_lyrics . '.</p>';
		}
		echo $lyrics;
	}
}