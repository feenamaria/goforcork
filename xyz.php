<style>
.calendar {
	width:12.5em;
	color:#FFF;
	background:#999;
}

.calendar .prevNext {
	overflow:hidden; /* wrap floats */
	zoom:1; /* trip haslayout, wrap floats IE */
	padding:0.25em 1em;
	text-align:right;
}

.calendar .prevNext a {
	color:#FFF;
}

.calendar .prevNext .prev {
	float:left;
}

.calendar table {
	width:100%;
	border-collapse:collapse;
	empty-cells:show;
	color:#FFF;
}

.calendar caption {
	font-weight:bold;
	padding:0.25em;
	background:#888;
}

.calendar th,
.calendar td {
	padding:0.1em;
	text-align:center;
	border:1px solid #AAA;
}

.calendar .today {
	font-weight:bold;
}

</style>
<?php

	$todayMonth = date('m');
	$todayYear = date('Y');
	
	$month = isset($_REQUEST['month']) ? $_REQUEST['month'] : $todayMonth;
	$year = isset($_REQUEST['year']) ? $_REQUEST['year'] : $todayYear;
	$today = (
		($month == $todayMonth) && ($year == $todayYear) ?
		date('d') : 0
	);
	
	$firstOfMonth = mktime(0,0,0,$month,1,$year);
	$lastDay      = date("t",$firstOfMonth);
	$thisMonth    = getdate ($firstOfMonth);
	$startDay  = $thisMonth['wday'];
	
	$prevLink = $nextLink = $_SERVER["PHP_SELF"].'?month=';
	
	$prevLink .= (
		$month == 1 ?
		'12&amp;year='.($year-1) :
		($month-1).'&amp;year='.$year
	);
	
	$nextLink .= (
		$month == 12 ?
		'1&amp;year='.($year+1) :
		($month+1).'&amp;year='.$year
	);
	
	
	
	
	
echo '
	<div class="calendar">
		<div class="prevNext">
			<a href="',$prevLink,'" class="prev">Previous</a>
			<a href="',$nextLink,'">Next</a>
		<!-- .prevNext --></div>
	
  <table>
		<caption>',date("F",$firstOfMonth),' ',$year,'</caption>
		<thead>
			<tr>
				<th scope="col">S</th>
				<th scope="col">M</th>
				<th scope="col">T</th>
				<th scope="col">W</th>
				<th scope="col">T</th>
				<th scope="col">F</th>
				<th scope="col">S</th>
			</tr>
		</thead><tbody>
			<tr>';
		
$i=0;
$today = date("d");
while ($i < $startDay) {
if($today == $i){
print'<td bgcolor="#999999">';
}else{
print'<td bgcolor="#555555">';
}
	echo '
				<td></td>';
	$i++;	
	
}


for ($day = 1; $day <= $lastDay; $day++) {

	if (($i % 7) == 0) echo '
			<tr>';
			
	echo '
				<td',(
					$day == $today ? ' class="today"' : ''
				),'>',$day,'</td>';
	
	if ((++$i % 7) == 0) echo '
			</tr>';
			
}

if (($i % 7) > 0) {
	while ($i++ % 7 > 0) echo '
				<td></td>';
	echo '
			</tr>';
}
		
echo '
		</tbody>
	</table>
<!-- .calendar --></div>';

?>