<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TLH成功</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="//jqueryui.com/resources/demos/style.css">
    <script type="text/javascript" src="jquery.leanModal.min.js"></script>
</head>
<body>

<?php
    session_start();
    $C = $_GET['C'];
            if($C=="seeds"){
                $name="施肥";
                $value="1000";
            }
            elseif ($C=="water") {
                $name="澆水";
                $value="3000";
            }
            elseif($C=="farmer"){
                $name="除草";
                $value="5000";
            }

    require 'config.php';



    $result = false;
    $id     = $_SESSION['id'];

    $sql    = $link->query("SELECT * FROM member where id = '$id'");

    while ($row = $sql->fetch_assoc()) {
        $coin     = $row['coin'];
        $touch    = $row['touch'];
        
    

                    if ($coin >= $value) {

                        $update = $link->query("UPDATE member SET coin = coin - '$value', touch = touch + 1 WHERE id = '$id'");
                        ($update == true ? $result['status'] = true : $result['status'] = false );
                        json_encode($result);
                        if ($result['status'] == true){  ?>
                                <script>
                                $(
                                    function () {
                                                    {
                                                        $("#lean_overlay").dialog({

                                                        resizable: true,
                                                        height: $(window).height() * 0.9,//dialog視窗��度
                                                        width: $(window).width() * 0.5,
                                                        modal: true,
                                                        buttons: {
                                                            //自訂button名稱
                                                            "完成": function () {
                                                                $(this).dialog("close");
                                                        return document.location.href="index.php";
                                                            }
                                                        }

                                                        });
                                                    }

                                                $(window).resize(function () {
                                                    var wWidth = $(window).width();
                                                    var dWidth = wWidth * 0.1;
                                                    var wHeight = $(window).height();
                                                    var dHeight = wHeight * 0.1;
                                                    $("#lean_overlay").dialog("option", "width", dWidth);
                                                    $("#lean_overlay").dialog("option", "height", dHeight);
                                                });

                                     }
                                 )
                                </script>

                                    <div id="lean_overlay" title="<?=$name;?>成功,將會扣金幣<?=$value;?>" style="display:none" ;>
                                        <?php 

                                        if($C=="seeds"){ 

                                             if ($touch <= 5) {
                                              echo '<img class="ui centered image" src="img/seeds1.gif">';
                                            }
                                            else if ($touch <= 10) {
                                              echo '<img class="ui centered image" src="img/seeds2.gif">';
                                            }
                                            else if ($touch <= 15) {
                                               echo '<img class="ui centered image" src="img/seeds3.gif">';
                                            }
                                            else  {
                                               echo '<img class="ui centered image" src="img/seeds3.gif">';
                                               
                                            }
                                        } 

                                         if($C=="water"){ 
                                            if ($touch <= 5) {
                                              echo '<img class="ui centered image" src="img/water1.gif">';
                                            }
                                            else if ($touch <= 10) {
                                              echo '<img class="ui centered image" src="img/water2.gif">';
                                            }
                                            else if ($touch <= 15) {
                                               echo '<img class="ui centered image" src="img/water3.gif">';
                                            }
                                            else {
                                               echo '<img class="ui centered image" src="img/water3.gif">';
                                               
                                            }
                                       } 

                                        if($C=="farmer"){
                                            if ($touch <= 5) {
                                              echo '<img class="ui centered image" src="img/farmer1.gif">';
                                            }
                                            else if ($touch <= 10) {
                                              echo '<img class="ui centered image" src="img/farmer2.gif">';
                                            }
                                            else if ($touch <= 15) {
                                               echo '<img class="ui centered image" src="img/farmer3.gif">';
                                            }
                                            else {
                                               echo '<img class="ui centered image" src="img/farmer3.gif">';   
                                            }
                                         } 

                                         ?>
                                        
                                    </div>

                     <?php 

                            }

                            else
                            {
                                echo '<script>alert("刪除失敗"); </script>';
                                echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
                            }
                        }

                    else{
                          echo '<script>alert("趕快去練習賺點錢吧~"); </script>';
                          echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
                     }
   } ?>
</body>
</html>