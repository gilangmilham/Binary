<?php
	$awal = microtime();
	$ketemu = false;
	$max = 10;
	$cari = 10;
	
	$arr = array();
	for($i=0 ; $i<$max ; $i++){
		Array_push($arr,$i);				// menambah isi array
	}

	$low = 0; 
	$high = count($arr) - 1;
	while ($low <= $high) {
		$mid = floor(($low + $high) / 2); 
		if($arr[$mid] == $cari) {
			$ketemu = true;
			$posisi = $mid;
		}
		if ($cari < $arr[$mid]) $high = $mid -1; 
		else $low = $mid + 1;
	}

	if($ketemu)
		echo $cari." Ketemu di " . $posisi;
	else
		echo $cari." tidak ketemu";
			
	$akhir = microtime();
	$final = $akhir-$awal;
	echo "<br><br>".$final;
?>