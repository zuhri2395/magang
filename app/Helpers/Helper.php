<?php

function terbilang($x)
{
  $ambil = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
  if ($x < 12)
    return " " . $ambil[$x];
  elseif ($x < 20)
    return terbilang($x - 10) . " belas";
  elseif ($x < 100)
    return terbilang($x / 10) . " puluh" . terbilang($x % 10);
  elseif ($x < 200)
    return " seratus" . terbilang($x - 100);
  elseif ($x < 1000)
    return terbilang($x / 100) . " ratus" . terbilang($x % 100);
  elseif ($x < 2000)
    return " seribu" . terbilang($x - 1000);
  elseif ($x < 1000000)
    return terbilang($x / 1000) . " ribu" . terbilang($x % 1000);
  elseif ($x < 1000000000)
    return terbilang($x / 1000000) . " juta" . terbilang($x % 1000000);
}

function convertMonth($input, $type = "0") {
	$months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
	$bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
	$input = explode(" ", $input);
	$i = 0;
	
	if($type == "1") {
		foreach($months as $month) {
			if($input[1] == $month) {
				$input[1] = $bulan[$i];
				return implode(" ", $input);
			}
			$i++;
		}
	} else {
		foreach($bulan as $bln) {
			if($input[1] == $bln) {
				$input[1] = $months[$i];
				return implode(" ", $input);
			}
			$i++;
		}
	}
}