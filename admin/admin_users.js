$(document).ready(function () {
    $('#example').DataTable();
    $("button").on("click", function () {

        if (this.className === "profile-close") {
            $("#table-container").show('slow');
            $("#popup").hide('fast');

            return;
        }
        if (this.id === "menu-button") {
            return;
        }

        if (this.className === "show-profile") {

            getProfile(this.id);
            $("#table-container").hide('fast');
            $("#popup").show('slow');
            //$("#profile-close").show("slow");
        }
        if (this.className === "delete") {
            $.confirm({
                title: 'Внимание!',
                content: 'Сигурни ли сте, че искате да изтриете потребителя?',
                type: 'red',
                typeAnimated: true,
                buttons: {
                    tryAgain: {
                        text: 'ИЗТРИЙ',
                        btnClass: 'btn-red',
                        action: function () {
                        }
                    },
                    close: {
                        text:'Не!',
                        action: function () {
                        }
                    }
                }
            });
        }
        if (this.id === "save") {

        }
    });

    $("#add-new").on('click',function(){
      $("#popup").show();
    });
});

function getProfile(id) {
    id = id.slice(1, id.lenght);
    $.post("ajax.php", {action: "profile", id: id}, function (result) {
        var encoded_result = JSON.parse(result)[0];
        $("#firstname").val(encoded_result["firstname"]);
        $("#lastname").val(encoded_result["lastname"]);
        $("#email").val(encoded_result["email"]);
        $('#country option[value="' + encoded_result["country"] + '"]').attr('selected', true);
        $('#city option[value="' + encoded_result["city"] + '"]').attr('selected', true);
        $("#address").val(encoded_result["address"]);
        $("#medical_story").val(encoded_result["medical_story"]);
        $("#training_experience").val(encoded_result["training_experience"]);
        $("#age").val(encoded_result["age"]);
        $("#weight").val(encoded_result["weight"]);
        $("#height").val(encoded_result["height"]);
        $("#target").val(encoded_result["target"]);
        $("#training").val(encoded_result["training"]);
        $("#more_info").val(encoded_result["more_info"]);
        $("#photo").attr('src', encoded_result["image"]);

    });

}
