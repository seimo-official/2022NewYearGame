<?php
include "config.php";
if(isset($_COOKIE['uuid'])){
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT ftf FROM user WHERE uuid ='" . $_COOKIE['uuid'] . "'";
$result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $a = $row["ftf"];
    }
    //echo $a;
if($a ==1){
    echo "

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta content='width=device-width,user-scalable=no' name='viewport'>
    <title>中间剧情</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
    <link rel='stylesheet' href='./argon.min.css' type='text/css'>
</head>

<body>
    <div class='main-content' id='panel'>
        <div class='header bg-pink pb-6'>
            <div class='container-fluid'>
                <div class='header-body'>
                    <div class='row align-items-center py-4'>
                        <div class='col-lg-6 col-7'>
                            <h6 class='h2 text-white d-inline-block mb-0'>中间剧情</h6>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
    <div class='container-fluid mt--6'>
        <div class='row'>
            <div class='col-xl-8 center'>
                <div class='card'>
                    <div class='card-body'>
                        <h2 class='card-header' style='text-align:center'>中间剧情
                        </h2>
                        <p class='card-text mb-4'>
                            <p>

                                将牌匾按照顺序放好后，一旁的门缓缓地打开了。
                                
                                <br> 我看见她站在通道的尽头，手捧鲜花笑着看向我。

                                <br> 我呆在了原地，老板往我手里塞给我一束鲜花，轻轻的拍拍我的肩膀。

                                <br> 我们走向彼此，交换鲜花，同声道：“你愿意成为我的伴侣吗？”

                                <br> 我们都愣了一下，又笑着看着对方，我没有说话，她知道我在等她先开口，“乐意至极。”

                                <br> 原来她也准备向我表白，这最后一关就是她准备的。

                                <br> 我们的爱是双向的，双向奔赴，只为离对方更近一点……

                            </p>


                        </p>
                    </div>
                </div>
                <!-- 此处编写跳转逻辑（前端太懒了） -->
                <div class='card'>
                    <div class='card-header'  style='text-align:center'>
                        <h3 class='mb-0'>点击按钮前往下一关！</h3>
                    </div>
                    <div class='card-body' style='text-align:center'>
                        <form>

                            <input type='button' value='前往下一关' type='submit' name='submit'onclick='tj425()' class='col-auto btn btn-sm btn-success'>


                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src='./jquery.min.js'></script>
    <script src='./bootstrap.bundle.min.js'></script>
    <script>
        function tj425(){
            location.href='part5.php';
        }
    </script>

</body>
<footer>
    <div class='card'>
        <div class='card-header' style='text-align:center'>
            联系我们：seimo@sakura-bbs.cn
            <br> 官方鹅群：542645899
            <br>本游戏策划团队版权所有，遵循AGPL开源协议。游戏所有源码将于结束后开源，可关注B站@Seimo 或加入官方鹅群获取详情</div>
    </div>
</footer>

</html>
";
    }else{
        echo "<script>location.href='jump.html'</script>";
    }
}else{
    echo "<script>location.href='no-login.html'</script>";
}