<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>TLH</title>
    <meta charset="utf-8">
    <link href="Semantic-UI-CSS-master\semantic.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="Semantic-UI-CSS-master\semantic.min.js"></script>
<script type="text/javascript" language="javascript"></script>
</head>
<body style="background-color: #f5f5f1;">
<div class="ui labeled icon menu" style="background-color: #82b541;color: #FFFFFF;">
<?php

    require 'config.php';
    require 'menu.php';
?>
</div>


<?php

    $question_count =5 ; // 題數 (可調整)

    $query = $link->query("SELECT * FROM question ORDER BY rand() LIMIT $question_count");
    $question = 1; // 將題目初始化，不須更動

    echo "<div align=\"center\" ><table class=\"ui striped table\"><tr><td><h3>NO</h3></td><td><h3>Question</h3></td></tr>";

    while ($row = $query->fetch_assoc()) {
        echo
            "<div><tr> <td> NO.".$question." 
        <td><font color=#6600FF size=4>".$row['que']."? <br><font>
        <td><input type=\"radio\" name=".$question." q=".$row['Q_id']." value=\"1\">(A) ".$row['A']."<br>
        <td><input type=\"radio\" name=".$question." q=".$row['Q_id']." value=\"2\">(B) ".$row['B']."<br>
       <td><input type=\"radio\" name=".$question." q=".$row['Q_id']." value=\"3\">(C)".$row['C']."<br>
        <td><input type=\"radio\" name=".$question." q=".$row['Q_id']." value=\"4\">(D)".$row['D']."<br>
        <div>";
        $question++;
    }
?>

<tr>
<button class="ui positive button active" id="submit">送出</button>
</tr>

<div id="result"></div>


<?php  $score=0; ?>


<script>

    $("#submit").click(function(){

        for (var i = 1; i <= <?=$question_count?>; i++) {

            var question_init = 1;
            $.ajax({
                type:'post',
                url:'exam_h.php',
                dataType:'json',
                data: {
                    question : $('input[name="'+ i +'"]').attr('q'),
                    ans      : $('input[name="'+ i +'"]:checked').val(),
                },
                error: function (xhr) {
                    alert("答案不能空白!");
                },
                success: function (response) {
                    var response = $.parseJSON(JSON.stringify(response));
                    if (response.status == false) {
                        alert();
                    }
                    else{
                   
                        if (response.isAnswer == 1) {
                            $("#result").append("<tr><td><font color=#0000FF><i class=\"checkmark icon\"></i>第" + question_init + " 題答對了！</br>" ); 
                            //score=score+1;
                            // 這裡增加你要給的獎勵
                            
                        }
                        else{
                            $("#result").append("<tr><td><font color=red><i class=\"remove icon\"></i>第" + question_init +"題答錯，正確答案為: " + response.trueAns.ans + "<BR>");
                        }
                        

                    }
                    question_init++;
                }
            });
        }
          //  tota=score*500;
           // $("#result").append("<br><br><h3>五題中你答對了" +score+ "題，獎勵:</h3><br><div class=\"ui right labeled input\"><div class=\"ui mini label\">$</div><input type=\"text\" value="+tota+ " readonly=\"true\"><div class=\"ui basic label\">元</div></div><br><br><input type=\"hidden\" value="+tota+" name=\"tota\" ><br>"
          //     );


            });

</script>



</body>
</html>
