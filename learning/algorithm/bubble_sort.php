<?php
    //冒泡排序算法
    //算法原理:
    //  内层循环:
    //      将相邻的两个元素进行大小比较 符合排序规则(大于或小于)时,将位置互换,
    //      内层循环完成后会将最大或者最小的元素排列到开始或结尾位置(由设置的大小排列规则决定 大到小/小到大)
    //  外层循环:
    //      因为内层循环完毕以后只会将一个最大或者最小的元素排列到元素序列的开始或者结尾阶段,所以需要做元素个数减一次的操作才会将所有元素排列完毕.

    //冒泡排序算法原型(由大到小排列)
    function yuanXing ($array) {
        //设置计数变量记录运算次数
        $times = 0;
        //外层循环
        for ($i = 0; $i < count($array)-1; $i++) {
            //内层循环负责进行相邻元素比较并调换位置
            for ($n = 0; $n < count($array); $n++) {
                //防止越界
                if (!isset($array[$n+1])) BREAK;
                //设置中间变量用于位置交换
                $middle = $array[$n];
                //比较相邻两元素值的大小
                if ($array[$n] < $array[$n+1]) {
                    $array[$n] = $array[$n+1];
                    $array[$n+1] = $middle;
                }
                //循环一次$times加1
                $times++;
            }
        }
        echo '<pre>';
        var_dump($array);
        echo '<hr/>';
        echo $times;
    }
    $testArr = [1,3,6,2,7,10,12,15,16,36,37,41,42,46,65];
//    $testArr = [1,3,6,2,7];
    yuanXing($testArr);

    //输出结果
    //
    //array(5) {
    //  [0]=>
    //    int(7)
    //  [1]=>
    //    int(6)
    //  [2]=>
    //    int(3)
    //  [3]=>
    //    int(2)
    //  [4]=>
    //    int(1)
    //}
    //
    // 运行16次
    //
    //-------------------------------------------------------------------------------------------------分割线
    //
    //达到了我们预计的效果但是还有一点细节需要完善:
    //1.外层循环时的count($array)应该在循环外部直接赋值给变量以免每一次循环都要做计算
    //2.因为内层循环完整的循环一遍以后会将级和中最大或者最小的元素移动到数组的最开始或者最末尾位置,
    //  拿上面的数组举例第一次完整的内循环以后数组会变成:
    //
    //  第一次完整内循环:[3,6,2,7,1] 1被移动到末尾
    //  第二次完整内循环:[6,3,7,2,1] 2被移动到倒数第2位
    //  第三次完整内循环:[6,7,3,2,1] 3被移动到倒数第3位
    //  第四次完整内循环:[7,6,3,2,1] 6被移动到倒数第4位
    //
    //  以上结果我们不难发现一个规律就是每一次完整的内环完毕以后就可以使一个最值移动到末尾,
    //  因此下一次循环的时候就不必再重复比较已经被移动到末尾的数值了,所以改进后的代码如下:
    //
    function gaiJin ($array) {
        //设置计数变量记录运算次数
        $times = 0;
        //设置循环次数
        $count = count($array)-1;
        //外层循环
        for ($i = 0; $i < $count; $i++) {
            //内层循环负责进行相邻元素比较并调换位置
            for ($n = 0; $n < $count-$i; $n++) {
                //设置中间变量用于位置交换
                $middle = $array[$n];
                //比较相邻两元素值的大小
                if ($array[$n] < $array[$n+1]) {
                    $array[$n] = $array[$n+1];
                    $array[$n+1] = $middle;
                }
                //循环一次$times加1
                $times++;
            }
        }
        echo '<pre>';
        var_dump($array);
        echo '<hr/>';
        echo $times;
    }
    gaiJin($testArr);

    //输出结果
    //array(5) {
    //  [0]=>
    //    int(7)
    //  [1]=>
    //    int(6)
    //  [2]=>
    //    int(3)
    //  [3]=>
    //    int(2)
    //  [4]=>
    //    int(1)
    //}
    //
    //
    //运行10次
    //

