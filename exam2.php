<!DOCTYPE html>
<html>
<head>
    <title>exam</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>


<?php

    require 'config.php';

    $question_count = 2; // 題數 (可調整)

    $query = $link->query("SELECT * FROM question ORDER BY rand() LIMIT $question_count");
    $question = 1; // 將題目初始化，不須更動

    while ($row = $query->fetch_assoc()) {

        echo
            '<div>'.$question.'. '.$row['que'].'? '.
                '<input type="radio" name="'.$question.'" q="'.$row['Q_id'].'" value="1">(A) '.$row['A'].
                '<input type="radio" name="'.$question.'" q="'.$row['Q_id'].'" value="2">(B) '.$row['B'].
                '<input type="radio" name="'.$question.'" q="'.$row['Q_id'].'" value="3">(C) '.$row['C'].
                '<input type="radio" name="'.$question.'" q="'.$row['Q_id'].'" value="4">(D) '.$row['D'].
            '<div>';

        $question++;
    }
?>

<button id="submit">送出</button>
<div id="result"></div>

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
                    alert('failed');
                },
                success: function (response) {
                    var response = $.parseJSON(JSON.stringify(response));
                    if (response.status == false) {
                        alert('failed');
                    }
                    else{
                        if (response.isAnswer == 1) {
                            $("#result").append('<h1 style="color:#0000FF;">第 ' + question_init + ' 題答對了！</h1>'); // 這裡增加你要給的獎勵
                        }
                        else{
                            $("#result").append('<h1 style="color:#FF0000;">臭廢物，第 ' + question_init + ' 題答錯了！，正確答案是 ' + response.trueAns.ans + '</h1>');
                        }
                    }
                    question_init++;
                }
            });
        }
    });

</script>

</body>
</html>
