<?php

function binarySearch($a, $item, $low, $high)
{

	if ($high <= $low)
		return ($item > $a[$low]) ?
					($low + 1) : $low;

	$mid = (int)(($low + $high) / 2);

	if($item == $a[$mid])
		return $mid + 1;

	if($item > $a[$mid])
		return binarySearch($a, $item,
							$mid + 1, $high);
		
	return binarySearch($a, $item, $low,
							$mid - 1);
}


function insertionSort(&$a, $n)
{
	// $i; 
    // $loc; 
    // $j;
    // $k; 
    // $selected;

	for ($i = 1; $i < $n; ++$i)
	{
		$j = $i - 1;
		$selected = $a[$i];

		
		$loc = binarySearch($a, $selected, 0, $j);

	
		while ($j >= $loc)
		{
			$a[$j + 1] = $a[$j];
			$j--;
		}
		$a[$j + 1] = $selected;
	}
}

$a = array(37, 23, 0, 17, 12, 72);
			
$n = sizeof($a);

insertionSort($a, $n);

echo "Sorted array:\n";
for ($i = 0; $i < $n; $i++)
	echo "$a[$i] ";

?>
