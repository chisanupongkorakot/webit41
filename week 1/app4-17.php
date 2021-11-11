<?php
	$val = 50;
	$result = isset($val);
	echo "ก่อนใช้ฟังก์ชัน unset ค่าของตัวแปร \$result คือ $result <br>";
	unset($val);
	$result = isset($val);
	echo "หลังใช้ฟังก์ชัน unset ค่าของตัวแปร \$result คือ $result";

?>
