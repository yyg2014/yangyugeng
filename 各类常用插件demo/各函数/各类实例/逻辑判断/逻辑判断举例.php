<?php
	$a = 10;
	
	$b = 20;
	
	//$a>9成立，接着会去判断第二个条件，
	//两个条件均满足，进入if语句块
	
	/*if($a>9 && $b<30){
		$a++;
		$b++;
	}*/
	
	//先判断$a>9是否成立，如果成立，接着判断第二个条件
	//$b=30会执行，此时$b变成了30，两个条件均成立，进入if语句块
	
	/*if($a>9 && $b=30){//$a=10  $b=30
		$a++;
		$b++;
	}*/
	
	//判断$a<9是否成立，如果不成立，发生短路效果
	//$b=30不再执行，只要一个为假，整体为假
	
	/*if($a<9 && $b=30){//产生了短路效果
		$a++;
		$b++;
	}*/
	
	//判断$a>9是否成立，如果成立，接着后面的判断
	//$b>30为假，一个为假整体为假
	
	if($a>9 && $b>30){//
		$a++;
		$b++;
	}
	
	echo "a=".$a;
	echo "<hr />";
	echo "b=".$b;