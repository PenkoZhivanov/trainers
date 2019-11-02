<!DOCTYPE html>
<html lang="bg">
    <head>
        <meta charset="UTF-8">
        <title>Summernote</title>

        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
        <style>
            p{
                margin:0px;
            }

            #preview{
                background-color: lightgoldenrodyellow;
                padding:10px;
                width:500px;
                min-height: 500px;height: 500px; 
                overflow-y: scroll;
                margin-left: 50px;
            }
            table {
                margin-top: 55px;
            }

            .action-buttons{
                margin:20 50; display: list-item;width: 10em;
               
            }
            .action-buttons:hover{
                color:black;
                font-weight: bold;
                box-shadow:5px 5px #ccc;
            }
        </style>
    </head>
    <body style="overflow-y: scroll !important;">
        <?php
        $exploded = explode("_", $_SESSION['page']);
        $end = end($exploded);
        ?>
        <input id="hidden_id" hidden value="<?= $end; ?>">
        <table >
            <tr><td style="vertical-align: text-bottom">    
                    <div id="summernote" style="margin-right: 20px; "></div></td>
                <td>
                    <div id="preview"  ></div>
                </td>
                <td>
                    <button class="action-buttons" style="" onclick="view()">Прегледай</button>

                    <button class="action-buttons" onclick="clr()" " >Изчисти</button>
                    <button class="action-buttons" onclick="unclear()" >Отмени изчистването</button>
                    <button class="action-buttons" onclick="save()" style="float:right;" >Запиши</button>
                </td>
            </tr>
            <tr>
                <td>  

                </td>
                <td>
                    <textarea id="hidden_text" style="display:none;"></textarea> 

                </td>
            </tr>
        </table>

        <script>
            $(document).ready(function () {
                //   $('#summernote').summernote();
                $('#summernote').summernote({
                    height: 500,
                    width: 500, // set editor height
                    minHeight: null, // set minimum height of editor
                    maxHeight: null, // set maximum height of editor
                    focus: true,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['fontname', ['fontname']],
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture', 'video']],
                        ['view', ['fullscreen', 'codeview', 'help']]

                    ]// set focus to editable area after initializing summernote


                });

                $.post("ajax.php", {action: 'getnews', id: $("#hidden_id").val()})
                        .done(function (data) {
                            var obj = JSON.parse(data);
                            var htmlstr = "<h1>" + obj.title + "</h1>" + obj.content;
                            $('#summernote').summernote('code', htmlstr);
                            $("#preview").html(htmlstr);
                        })
                        .always(function () {
                            var texts = document.querySelectorAll("#preview > p");
                            for (var i = 0; i < texts.length; i++) {
                                texts[i].innerHTML = "&nbsp;&nbsp;&nbsp;" + texts[i].innerHTML.replace(/&nbsp;/g, "");

                            }
                        });

            });

            function view() {
                var markupStr = $('#summernote').summernote('code');

                /*
                 $.post("admin/convert.php", {data: markupStr})
                 .done(function (data) {
                 $("#preview").html(data);
                 })
                 .always(function () {
                 var texts = document.querySelectorAll("#preview > p");
                 for (var i = 0; i < texts.length; i++) {
                 texts[i].innerHTML = "&nbsp;&nbsp;&nbsp;" + texts[i].innerHTML.replace(/&nbsp;/g, "");
                 
                 }
                 });
                 */
                $("#preview").html(markupStr);
                $("#hidden_text").val(markupStr);

            }

            function unclear() {

                var HTMLstring = $("#hidden_text").val();
                $('#summernote').summernote('code', HTMLstring);

            }

            function clr() {
                $('#summernote').summernote('reset');
            }

            function save() {

                var imgsrc = $("img");
                var images = [];

               /* if (imgsrc.length > 0) {
                    for (var i = imgsrc.length / 2; i < imgsrc.length; i++) {
                        var image = {name: null, width: null, data: null};
                        var addtime = Date.now();
                        image['name'] = $("img")[i].getAttribute("data-filename");
                        image['width'] = $("img")[i].style.width;
                        image['data'] = $("img")[i];
                        images.push(image);
                        $("img")[i].setAttribute("src", image['name']);
                    }
                }
 
                $.post("save.php", {image: images}).done(function (data) {
                    $("#test").html(data);

                });*/

                $.post( "save.php", { data: $('#preview').html()} );

            }
        </script>

        <div id="test"></div>


    </body>
</html>