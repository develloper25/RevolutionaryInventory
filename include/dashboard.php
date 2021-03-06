<?php 

/**
	****** returns the space given in bytes *****
*/
function getSpaceInGb($spaceInBytes){
	$spaceInGb = $spaceInBytes / pow(1024, 3);
	return $spaceInGb;
}

function getPerCentOfFreeSpace($freeSpaceInGb, $totalSpaceInGb){
	$perCent = $freeSpaceInGb * 100 / $totalSpaceInGb;
	return $perCent;
}

$diskFreeSpace = disk_free_space("/");
$diskTotalSpace = disk_total_space("/");
$diskUsedMemory = getSpaceInGb($diskTotalSpace) - getSpaceInGb($diskFreeSpace);

$perCentUsedMemory = round(getPerCentOfFreeSpace($diskUsedMemory,getSpaceInGb($diskTotalSpace)),0);

?>

<div class ="gridFull">
	<div class ="gridItem1">
	</div>
	<div class ="gridItem2">
	<?php
		echo 'Used Memory:<br><br>';
		echo '<div class="progressBorder">';
		echo '<div class="progressBar" '.'style="width:' . $perCentUsedMemory . 'px;"'.'><div class="progressBarFont">'.$perCentUsedMemory.'%</div></div>';
		echo '</div>';
	?>
	</div>
	<div class ="gridItem3">
	</div>
	<div class ="gridItem4">
	</div>
	<div class ="gridItem5">
	</div>
	<div class ="gridItem6">
	</div>
</div>