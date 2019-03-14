<?php 

	$arr = array(2, 3, 4, 10, 40); 
	$n = count($arr); 
	$cari = 2; 
	$hasil = exponentialSearch($arr, $n, $cari); 
	if($hasil == -1) 
		echo "Data tidak ditemukan"; 
	else
		echo "Data ditemukan di index ke-" , $hasil;
									
	function exponentialSearch($arr, $n, $x) { 
		if ($arr[0] == $x) 
			return 0; 

		$i = 1; 
		while ($i< $n and $arr[$i] <=$x) 
			$i = $i * 2; 

		return binarySearch($arr, $i/2, min($i, $n), $x); 
	}

	function binarySearch($arr, $l, $r, $x) {
		if ($r >= $l) { 
			$mid = $l + ($r - $l)/2; 

			if ($arr[$mid] == $x) 
				return $mid; 

			if ($arr[$mid] > $x) 
				return binarySearch($arr, $l, $mid-1, $x); 

			return binarySearch($arr, $mid+1, $r, $x); 
		}
		return -1; 
	}
?> 
