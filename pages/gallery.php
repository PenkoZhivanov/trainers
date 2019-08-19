<?php
include 'head.php';
include 'navigation.php';
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : "";

if (isset($_GET['delete'])) {
    unlink($_GET['delete']);
    unset($_GET['delete']);
    header("Location: gallery.php");
}
?><div id="postt" style="min-height: 60px;"></div>
<body data-spy="scroll" data-target=".navbar" data-offset="60">
    <fieldset><legend>Галерия</legend>
        <div id="gallery-container" style="max-width: 1024px;">
<?php
$dir = './images';
$files = scandir($dir, 1);
foreach ($files as $value) {
    if ($value == "." || $value == "..") {
        continue;
    }
    echo '<div style="width:110px; display:inline; float:left;">';
    echo '<img src="images/' . $value . '" style="width:100px;margin:10px;border: 1px;" onclick="selectImage(this, $(this))">';
    echo '<button onclick="delete_image($(this));" style="margin:0px 10px;display:none;">Изтрий</button>';
    echo '</div>';
}
?>
        </div>
    </fieldset>
    <form id="upl" action = "uploadFile.php" method = "POST" enctype = "multipart/form-data">
        <fieldset>
            <legend>Качи снимка</legend>
        </fieldset>

        <input type = "file" name = "image" required="required"/>
        <input type = "submit"/><br>
        <label id="error" style="color:red;"><?php echo $errors; ?></label>

    </form>

    <script>

        function selectImage(element, jel) {
            var el = document.querySelectorAll("img");
            $("#gallery-container").find("button").hide("fast");
            el.forEach(function (index, item) {
                index.style.border = "1px solid black";
            });

            element.style.border = "1px solid red";
            jel.parent().find("button").show("fast");
        }

        function delete_image(el) {

            var path = el.parent().find("img").attr("src");
            var ok = confirm("Искате ли да изтриете " + path + "?");
            if (!ok) {
                return;
            }
            var jqxhr = $.post("ajax_gallery.php", {action: "delete", image: path}, function (data) {
                $("#gallery-container").html(data);
                $("#error").text("");
            })
                    .done(function () {

                    })
                    .fail(function () {
                        //  alert( "error" );
                    })
                    .always(function () {
                        // alert( "finished" );
                    });

        }

    </script>