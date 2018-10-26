<?php
	$pertemuan = 14;
	$presentasi = 10;
	echo $kehadiran = $presensi/$pertemuan;
	if($kehadiran>0.75) {
		echo "boleh mengikuti ujian"
	}
?>