<<<<<<< HEAD
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
=======
<!DOCTYPE html>
<html>
<head>
    <title>exam</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
>>>>>>> cd9d483f52f14ba805e164b809d38416f56e8db6


<?php

<<<<<<< HEAD
    $question_count =5 ; // 題數 (可調整)
=======
    require 'config.php';

    $question_count = 2; // 題數 (可調整)
>>>>>>> cd9d483f52f14ba805e164b809d38416f56e8db6

    $query = $link->query("SELECT * FROM question ORDER BY rand() LIMIT $question_count");
    $question = 1; // 將題目初始化，不須更動

<<<<<<< HEAD
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
=======
    while ($row = $query->fetch_assoc()) {

        echo
            '<div>'.$question.'. '.$row['que'].'? '.
                '<input type="radio" name="'.$question.'" q="'.$row['Q_id'].'" value="1">(A) '.$row['A'].
                '<input type="radio" name="'.$question.'" q="'.$row['Q_id'].'" value="2">(B) '.$row['B'].
                '<input type="radio" name="'.$question.'" q="'.$row['Q_id'].'" value="3">(C) '.$row['C'].
                '<input type="radio" name="'.$question.'" q="'.$row['Q_id'].'" value="4">(D) '.$row['D'].
            '<div>';

>>>>>>> cd9d483f52f14ba805e164b809d38416f56e8db6
        $question++;
    }
?>

<<<<<<< HEAD
<tr>
<button class="ui positive button active" id="submit">送出</button>
</tr>

<div id="result"></div>


<?php  $score=0; ?>


=======
<button id="submit">送出</button>
<div id="result"></div>

>>>>>>> cd9d483f52f14ba805e164b809d38416f56e8db6
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
<<<<<<< HEAD
                    alert("答案不能空白!");
=======
                    alert('failed');
>>>>>>> cd9d483f52f14ba805e164b809d38416f56e8db6
                },
                success: function (response) {
                    var response = $.parseJSON(JSON.stringify(response));
                    if (response.status == false) {
<<<<<<< HEAD
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
                        

=======
                        alert('failed');
                    }
                    else{
                        if (response.isAnswer == 1) {
                            $("#result").append('<h1 style="color:#0000FF;">第 ' + question_init + ' 題答對了！</h1>'); // 這裡增加你要給的獎勵
                        }
                        else{
                            $("#result").append('<h1 style="color:#FF0000;">臭廢物，第 ' + question_init + ' 題答錯了！，正確答案是 ' + response.trueAns.ans + '</h1>');
                        }
>>>>>>> cd9d483f52f14ba805e164b809d38416f56e8db6
                    }
                    question_init++;
                }
            });
        }
<<<<<<< HEAD
          //  tota=score*500;
           // $("#result").append("<br><br><h3>五題中你答對了" +score+ "題，獎勵:</h3><br><div class=\"ui right labeled input\"><div class=\"ui mini label\">$</div><input type=\"text\" value="+tota+ " readonly=\"true\"><div class=\"ui basic label\">元</div></div><br><br><input type=\"hidden\" value="+tota+" name=\"tota\" ><br>"
          //     );


            });

</script>



=======
    });

</script>

>>>>>>> cd9d483f52f14ba805e164b809d38416f56e8db6
</body>
</html>
