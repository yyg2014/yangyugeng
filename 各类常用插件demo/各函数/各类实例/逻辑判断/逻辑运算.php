<?php
	$a = 20;
	
	//-1   19 $a=19  $a=20 20 
	$b = --$a - ++$a;
	//22   20 $a=21  $b=-2  -2 
	$c = $a++ - --$b;
	//-1   $a=22 22  $c=23 23 
	$d = ++$a - ++$c;
	//-22   -1 $d=0  $a=21 21
	$e = $d++ - --$a;
	//-42    -21    $e=-21  -21
	$f = $e + ++$e;
	//   21-2+23+0-21-42
	$g = $a+$b+$c+$d+$e+$f;
	
	echo "g=".$g;
	
	//西安   陈泽熙   -21
	//昆明  高尉尧    -22
	//广州  谢文垚 -- 陈修文   150
	//广州  赖天泉  -64
	//刘林  -26
	//肖铁   -22
	//郭鹏云  -23
	//张安邦  -26