<?
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
	for($i = 0 ; $i < 4	; $i++){
		$count = count($arr);
		
		$beforeValue = 1;
		$arr2 = array();
		
		echo "Starting count = $count<br>";
		for($j = 0,$sameCount = 0; ; $j++){
			if($arr[$j] == $beforeValue){
				$sameCount++;
				echo "count beforeValue = $beforeValue sameCount = $sameCount<br>";
			}elseif($j != $count-1){
				echo "push $beforeValue $sameCount<br>";
				array_push($arr2,$beforeValue,$sameCount);
				break;
			}else{
				echo "push2 $beforeValue $sameCount<br>";
				array_push($arr2,$beforeValue,$sameCount);
				$beforeValue++;
			}
		}
		//echo "arr2 = ".count($arr2)."<br>";
		//$count = count($arr2);
		//echo "arr2 = ".$count."<br>";
		$arr = $arr2;
		$count = count($arr);
		echo "result count = $count<br>";
		echo "$j arr = ";
		/*
		for($j = 0 ;j < $count  ; $j++){
			echo $arr[$j]." ";
			echo "ver";
		}*/
		echo "ver";
	}


?>