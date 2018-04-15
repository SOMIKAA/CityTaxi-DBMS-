<?php
define('INFINITY', 10000000);
 
$matrix = array(
    "LosAngeles" => array( 0,  3,  4),
    "Miami" => array( 0,  0,  2),
    "Chicago" => array( 0,  -2, 0),
	"NewYorkCity" => array( 0,  -2, 0),
	"San Antonio" => array( 0,  -2, 0),
    "Belling-ham" => array( 0,  -2, 0),
	"Kansas City"=> array( 0,  -2, 0),
	"Detroit"=> array( 0,  -2, 0),
	"Dallas" => array( 0,  -2, 0),
	"Columbus"=> array( 0,  -2, 0),
	"Indianapolis" => array( 0,  -2, 0),
	"Philadelphia" => array( 0,  -2, 0),
	"Sacramento" => array( 0,  -2, 0),
	"Jacksonville" => array( 0,  -2, 0),
	"Buffalo" => array( 0,  -2, 0),
	"Nashville"=> array( 0,  -2, 0),
	"Minneapolis" => array( 0,  -2, 0),
	"Tampa" => array( 0,  -2, 0),
	"Phoenix" => array( 0,  -2, 0),
	"Houston" => array( 0,  -2, 0),
	"Charlotte" => array( 0,  -2, 0),
	"Portland" => array( 0,  -2, 0),
	 "Orlando"=> array( 0,  -2, 0),
	"Denver" => array( 0,  -2, 0),
	 "San Diego"=> array( 0,  -2, 0),
	 "Las Vegas"=> array( 0,  -2, 0),
	 "San Francisco"=> array( 0,  -2, 0),
    "Atlanta" => array( 0,  -2, 0),
	"Boston" => array( 0,  -2, 0),
	"Birmingham" => array( 0,  -2, 0),
	"Washington" => array( 0,  -2, 0),
	"Boise" => array( 0,  -2, 0),
	"Cleveland" => array( 0,  -2, 0),
);
 
$len = count($matrix);
 
$dist = array();
 
function BellmanFord(&$matrix, &$dist, $start)
{
    global $len;
 
    foreach (array_keys($matrix) as $vertex) {
        $dist[$vertex] = INFINITY;
        if ($vertex == $start) {
            $dist[$vertex] = 0;
        }
    }
 
    for ($k = 0; $k < $len - 1; $k++) {
        for ($i = 0; $i < $len; $i++) {
            for ($j = 0; $j < $len; $j++) {
                if ($dist[$i] > $dist[$j] + $matrix[$j][$i]) {
                    $dist[$i] = $dist[$j] + $matrix[$j][$i];
                }
            }
        }
    }
}
 
BellmanFord($matrix, $dist, 0);
 
// [0, 2, 4]
print_r($dist);
?>