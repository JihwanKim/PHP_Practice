<?
// ANT SEQUENCE
//개미수열 15번째까지 하기
// 처음에는 1				1
// 다음 1 1 				2
// 다음 1 2					2
// 다음 1 1 2 1				4
// 다음 1 2 2 1 1 1			6
// 다음 1 1 2 2 1 3			6
// 다음 1 2 2 2 1 1 3 1		8
	$arr = array();
	array_push($arr,1);
	for($i = 0 ; $i < 20; $i++){
		$count = count($arr);
		// beforeValue is always 1
		$beforeValue = 1;
		// arr2 is new array for search new value
		$arr2 = array();
		
		//search sequence
		for($j = 0,$sameCount = 0; ; $j++){
			if($arr[$j] == $beforeValue){
				// if beforeValue is same currnetValue, sameCount add 1
				$sameCount++;
			}else{
				// if beforeValue and currentValue is not same, push beforeValue and sameCount. and then beforeValue set current value (arr[j]). and sameCount set 1.
				array_push($arr2,$beforeValue,$sameCount);
				$beforeValue = $arr[$j];
				$sameCount = 1;
			}
			// if j is count-1 then, push beforeValue and sameCount to arr2 and then break loop
			if ($j == $count-1){
				array_push($arr2,$beforeValue,$sameCount);
				break;
			}
		}
		$arr = $arr2;
		$count = count($arr);
		echo "result count = $count<br>";
		echo "$jth arr = ";
		
		for($j = 0 ;$j < $count  ; $j++){
			echo $arr[$j]." ";
		}
		echo "<br><br>";
	}
?>