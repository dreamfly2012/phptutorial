<?php

//快速排序
//待排序数组
$arr=array(6,3,8,6,4,2,9,5,1);
//函数实现快速排序
function quick_sort($arr)
{
    //判断参数是否是一个数组
    if(!is_array($arr)) {
        return false;
    }
        
    //递归出口:数组长度为1，直接返回数组
    $length=count($arr);
    if($length<=1) {
        return $arr;
    }
        
    //数组元素有多个,则定义两个空数组
    $left=$right=array();
    //使用for循环进行遍历，把第一个元素当做比较的对象
    for($i=1;$i<$length;$i++)
    {
        //判断当前元素的大小
        if($arr[$i]<$arr[0]){
            $left[]=$arr[$i];
        }else{
            $right[]=$arr[$i];
        }
    
    }
    //递归调用
    $left=quick_sort($left);
    $right=quick_sort($right);
    //将所有的结果合并
    return array_merge($left,array($arr[0]),$right);
}

print_r(quick_sort($arr));