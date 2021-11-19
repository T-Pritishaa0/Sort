<?php

//Binary search

function binarySearch($a, $item, $low, $high)
{

	if ($high <= $low)
		return ($item > $a[$low]) ?
					($low + 1) : $low; // if $item>$a[$low is true then ($low + 1). If it is false then $low.

	// to calculate the mid value

	$mid = (int)(($low + $high) / 2);

	// If the item is equals to the mid value
	if($item == $a[$mid])
		return $mid + 1;

	// If item is greater than the mid value

	if($item > $a[$mid])
		return binarySearch($a, $item,
							$mid + 1, $high);
	
	// If item is less than the mid value
	return binarySearch($a, $item, $low,
							$mid - 1);
}

//Insertion sort

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

//Initializing array

$a = array(37, 23, 0, 17, 12, 72);
			
$n = sizeof($a);

insertionSort($a, $n);

//Priting the sorted array

echo "Sorted array:\n";
for ($i = 0; $i < $n; $i++)
	echo "$a[$i] ";

?>
