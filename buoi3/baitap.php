<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/style.css" rel="stylesheet">
</head>

<?php

$arrSP = [
    [
        'name'=>"iPhone 5s",
        'price'=>"500000",
        'image'=>'https://cdn.tgdd.vn/Products/Images/42/114115/iphone-x-64gb-1-400x460.png'
    ],
    [
        'name'=>"iPhone 6",
        'price'=>"600000",
        'image'=>'https://cdn.tgdd.vn/Products/Images/42/118143/huawei-nova-2i-2-400x460.png'
    ],
    [
        'name'=>"iPhone 7",
        'price'=>"5000000",
        'image'=>'https://cdn.tgdd.vn/Products/Images/42/112833/sony-xepria-xa1-plus-1-400x460.png'
    ],
    [
        'name'=>"iPhone 6s",
        'price'=>"650000",
        'image'=>'https://cdn.tgdd.vn/Products/Images/42/118143/huawei-nova-2i-2-400x460.png'
    ],
    [
        'name'=>"iPhone 8s",
        'price'=>"50000000",
        'image'=>'https://cdn.tgdd.vn/Products/Images/42/103404/samsung-galaxy-j7-pro-2323-400x460.png'
    ],
    [
        'name'=>"iPhone X",
        'price'=>"60000000",
        'image'=>'https://cdn.tgdd.vn/Products/Images/42/118143/huawei-nova-2i-2-400x460.png'
    ]
];

//echo number_format(2000000000,3,',','.');
?>



<body>
    <div class="container">
        <?php foreach($arrSP as $sanpham):?>
        <div class="sanpham">
            <div class="hinh">
                <img src="<?=$sanpham['image']?>">
            </div>
            <div class="thongtin">
                <p>Giao hàng tận nơi miễn phí</p>
                <p>Khuyến mãi: tai nghe...</p>
                <p>Giao hàng tận nơi miễn phí trong 30 phút</p>
            </div>
            <div class="tensanpham"><?=$sanpham['name']?></div>
            <div class="giasanpham"><?=number_format($sanpham['price'])?></div>
        </div>
        <?php endforeach?>
    </div>
</body>
</html>