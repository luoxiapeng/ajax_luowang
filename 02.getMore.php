<?php 
	// 读取json文件  str 
	$str = file_get_contents('data/info.json');

	// 转化为 php中的数组 str->php arr
	$arr = json_decode($str);

	// 从数组中 获取 某一个元素 array_rand(arr,1);  随机的index
	$randomKey = array_rand($arr,1);


	// 讲 获取到的单个 元素 返回给浏览器
	$oneObj = $arr[$randomKey]; // 获取的是 php对象 

	// 因为 如果直接 $oneObj返回 发回的格式 是 php中的 对象 并不是 json格式字符串
	// print_r($oneObj); // 直接将 对象 返回给 浏览器 不能直接使用echo

	// 所以 我们需要 使用 json_encode 进行转化 obj ->str json 格式 字符串
	echo  json_encode($oneObj);
 ?>