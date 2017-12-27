<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .banco{
        width:800px;
    }
    .o-trang, .o-den{
        width:100px;
        height:100px;
        float:left;
        font-size:30px
    }
    .o-trang{
        background-color: #fff
    }
    .o-den{
        background-color: #000;
        color:#fff
    }
</style>
<body>
    <div class="banco">

        <?php
        for($i=1; $i<=8; $i++){
            for($j = 1 ; $j<=8 ; $j++){
                if(($j+$i)%2 == 0){
                    echo "<div class='o-trang'>".$i .' '. $j."</div>";
                }
                else
                    echo "<div class='o-den'>".$i .' '. $j."</div>";
            }
        }
        
        ?>
    </div>

</body>
</html>