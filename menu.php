<a class="item" href="index.php" style="color:#FFFFFF;">
    <i class="home icon"></i>首頁
</a>
<a class="item" href="learn.php" style="color:#FFFFFF;">
    <i class="book icon"></i>教學
</a>
<a class="item" href="test.php" style="color:#FFFFFF;">
    <i class="write icon"></i>測驗
</a>
<a class="item" href="shop.php" style="color:#FFFFFF;">
    <i class="shop icon"></i>商城
</a>
<?php
    if (isset($_SESSION['id'])) {

        echo '
            <a class="item" href="logout.php" style="color:#FFFFFF;">
                <i class="user icon"></i>登出 '.$_SESSION['id'].'
            </a>
        ';
    }
    else{

        echo '
            <a class="item" href="log.php" style="color:#FFFFFF;">
                <i class="user icon"></i>登入
            </a>
        ';
    }
?>
