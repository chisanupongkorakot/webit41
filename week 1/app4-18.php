<?php
	define("vat",0.07);
	$spice = 500;
	$tax = $spice*vat;
	echo "ราคาสินค้า $spice บาท  มีภาษีมูลค่าเพิ่มเท่ากับ $tax บาท ";
?>
