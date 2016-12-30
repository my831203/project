<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TLH成功收成</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="//jqueryui.com/resources/demos/style.css">
    <script type="text/javascript" src="path_to/jquery.leanModal.min.js"></script>
</head>
<body>

<?php
    session_start();

   
    require 'config.php';
    $result = false;
    $id     = $_SESSION['id'];
    $value = "10000";

    $sql    = $link->query("SELECT * FROM member where id = '$id'");

    while ($row = $sql->fetch_assoc()) {
        $coin     = $row['coin'];
        }
    

                    if ($coin >= $value) { 
                    



                        $update = $link->query("UPDATE member SET coin = coin - '$value', touch = 0, col = col + 1  WHERE id = '$id'");
                        ($update == true ? $result['status'] = true : $result['status'] = false );
                            json_encode($result);
                            if ($result['status'] == true)
                            {
                                $query = $link->query("SELECT * FROM member where id = '$id'");
                                $row = $query->fetch_assoc();
                                ?>
                                <script>
                                $(
                                    function () {
                                                    {
                                                        $("#dialog-confirm").dialog({
                                                        
                                                        //resizable: true,
                                                        height: $(window).height() * 0.9,//dialog視窗��度
                                                        width: $(window).width() * 0.5,
                                                        //modal: true,
                                                        buttons: {
                                                            //自訂button名稱
                                                            "完成": function () {
                                                                $(this).dialog("close");
                                                        return document.location.href="col.php";
                                                            }
                                                        }

                                                        });
                                                    }

                                                $(window).resize(function () {
                                                    var wWidth = $(window).width();
                                                    var dWidth = wWidth * 0.4;
                                                    var wHeight = $(window).height();
                                                    var dHeight = wHeight * 0.4;
                                                    $("#dialog-confirm").dialog("option", "width", dWidth);
                                                    $("#dialog-confirm").dialog("option", "height", dHeight);
                                                });

                                     }
                                 )
                            </script>

                                     
                                    <?php
                                    if ($row['col']<=1) { ?>
                                            <div id="dialog-confirm" title="恭喜獲得劍玉,將會扣金幣10000" style="display:none" ;>
                                            <img  class="ui centered image" src="img/bamboo.gif"'"></div>;
                                       <?php }
                                        else if ($row['col']<=2) { ?>
                                            <div id="dialog-confirm" title="恭喜獲得手搖鼓,將會扣金幣10000" style="display:none";>
                                            <img  class="ui centered image" src="img/bamboo.gif"'"></div>;
                                        <?php}
                                        else { ?>
                                             <div id="dialog-confirm" title="恭喜獲得毽子,將會扣金幣10000" style="display:none";>
                                             <img  class="ui centered image" src="img/bamboo.gif"'"></div>;                                        
                                        <?php } 
                                    ?> 
                             
                                    

                                    <?php
                                        
                            }
                            else
                            {
                                echo '<script>alert("失敗"); </script>';
                                echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
                            }
                    }

                    else{
                          echo '<script>alert("趕快去練習賺點錢吧~"); </script>';
                          echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
                     }

    


    ?>
    </body>
</html>
