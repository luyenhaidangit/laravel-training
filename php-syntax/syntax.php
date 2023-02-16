<?php
    // PHP
    $customerName = "Luyện Hải Đăng";
    $customerAge = 21;
    echo $customerName;
    echo "<br/>";
    echo $customerAge;
    echo "<br/>";
    var_dump($customerAge);
    print_r($customerAge);

    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo $customerName." ".$customerAge;
    echo "Tuổi {$customerAge}"; 
    echo "<br/>";
    $url = 'https://th.bing.com/th/id/OIP.sjhLnDx0uyDWZ3VxzaTCpAHaHa?pid=ImgDet&rs=1';
    $image = '<img src="'.$url.'"/>';
    echo $image;
    
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    define("_LUYEN_HAI_DANG",21);
    echo _LUYEN_HAI_DANG;
    $checkDefine = defined('_LUYEN_HAI_DANG');
    var_dump($checkDefine);

    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    $age = "30";
    $age1 = (int)$age;
    $checkNumber = is_int($age1);
    var_dump($age1);

    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    $a = 1;
    $b = 2;
    $total = $a + $b;
    echo $total;

    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    $number = 1;
    if($number>2){
        echo "Dung roi";
    }elseif($number>5){
        echo "Sai roi";
    }else{
        echo "Hihi";
    }


    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    $numbertest = 1;
    switch($number){
        case 0:
            echo "1";
            break;
        case 1;
            echo "hiihih";
            break;
        case 2:
            echo "baba";
            break;
        default:
            echo "balfasdf";
            break;
    }

    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    for($i=0;$i<10;$i++){
        echo $i.'<br/>';
        if($i==5){
            break;
        }
    }

    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    $while = 3;
    while($while<10){
        echo $while.'<br/>';
        $while++;
    }
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    $doWhile = 4;
    do{
        echo $doWhile.'<br/>';
        $doWhile++;
    }while($doWhile<10);
    // die(); exit(); dừng cả chương trình
    
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    // Path file
    echo __FILE__;
    echo "<br/>";
    // Path Dir
    echo __DIR__;
    // Url

    $path_dir = __DIR__.'/includes';
    // include $path_dir.'/header.php'
    // include $path_dir.'/../header.php' --> .. để lùi 1 folder
    // echo 'Day la noi dung them'
    // include $path_dir.'/content.php'
    // include $path_dir.'/footer.php'
    // include_once $path_dir.'/footer.php' --> chỉ 1 lần nếu trùng
    // require, require_once tương tự nhưng lỗi sẽ dừng

    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    $demo = 1 > 3 ? "ok": "ko";
    echo $demo;

    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    function total($a,$b){
        return $a + $b;
    }
    echo "Tong".total(3,5);

    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    $number1 = 2;
    if(isset($number) && $number > 0){
        echo "hihihahlfasdjkf";
    }
    // empty rỗng, =0, null, arr rỗng, object rỗng, false
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    $arr = ['hehe','huhu',30];
    $arr[] = "okn ha"; // Them
    $arr[1] = "okn ha222"; // Sua
    // unset($arr[2]); // Xoa
    echo '<pre>';
    print_r($arr);
    echo '</pre>';

    for($index=0;$index<count($arr);$index++){
        echo $arr[$index];
    }

    if(isset($_GET) && !empty($_GET)) {
		// Lấy giá trị của username và email từ query string
		$username = $_GET['username'];
		$email = $_GET['email'];

		// Hiển thị giá trị của username và email
		echo "Username: " . $username . "<br>";
		echo "Email: " . $email;
	} else {
		// Nếu không có query string thì hiển thị thông báo
		echo "Không có dữ liệu để hiển thị!";
	}
   
    
?>
 
