<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery UI Dialog - Default functionality</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="//jqueryui.com/resources/demos/style.css">

    <script>
        //How to resize jquery ui dialog with browser
        //http://stackoverflow.com/questions/9879571/how-to-resize-jquery-ui-dialog-with-browser
        $(
            function () {
                $("button").click(function () {
                    $("#dialog-confirm").dialog({

                        resizable: true,
                        height: $(window).height() * 0.9,//dialog視窗��度
                        width: $(window).width() * 0.9,
                        modal: true,
                        buttons: {
                            //自訂button名稱
                            "Delete all items": function () {
                                $(this).dialog("close");
                            }
                        }
                    });
                })

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

</head>
<body>

    <button>click</button>
    <div id="dialog-confirm" title="Empty the recycle bin?" style="display:none">
        
		<p><img src="img/water1.gif"></p>
    </div>

</body>
</html>