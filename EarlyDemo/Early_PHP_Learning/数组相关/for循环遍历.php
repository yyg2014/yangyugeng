<?php
	//声明一个函数
	$arr = array(1,2,3,4,5);//下标连续的索引数组
	
	#$arr = array(1,2,3,4,5,100=>6);
	
	#$arr = array('a'=>1,'b'=>2,'c'=>3);
	
	//遍历这个数组
	/*0----$arr[0]
	1----$arr[1]
	2----$arr[2]
	3----$arr[3]
	4----$arr[4]*/
	
	//count($arr)获取数组元素的个数
	
	for($i=0,$c=count($arr);$i<$c;$i++){
		echo $i."----".$arr[$i]."<br />";
	}