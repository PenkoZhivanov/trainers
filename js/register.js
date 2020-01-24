$(document).ready(function () {

    $("#register").click(function () {

        var email = $("#email").val().trim();
        var password = $("#password").val().trim();
        var cpassword = $("#cpassword").val().trim();
        if (email == '' || password == '' || cpassword == '') {
            myObj.abc("Моля, попълнете всички полета!");
        } else if ((password.length) < 8) {

            myObj.abc("Паролата трябва да е най-малко 8 знака!");
        } else if (!(password).match(cpassword)) {
             myObj.abc("Паролите не съвпадат!");
        } else {
            $.post("ajax.php", {
                action: "register",
                email: email,
                password: password
            }, function (data) {
                let result = JSON.parse(data);
                if(result!=0){
                    myObj.abc("Има потребител с такъв email");
                }
                else {
                   myObj.abc("Регистрацията е успешна. \n\r Сега може да влезете в сайта.", 1);
             
                }
            });
        }
        
       
    });
    
    $("#button-clear").on("click",function(){
   
        $("#email").val("");
         $("#password").val("");
         $("#cpassword").val("");
    });
     $("#button-back").on("click",function(){
   
   window.location.href = "index.php";
    });
    
});

myObj = {
   abc:  function (message, success=0){
    var obj = {
            title: 'Внимание',
            content: '',
            type: 'red',
            boxWidth: '20%',
            useBootstrap: false,
            typeAnimated: true,
            buttons: {
                tryAgain: {
                    text: 'OK',
                    btnClass: 'btn-red',
                    action: function () {
                        //window.location.href = "admin.php";
                    }
                }
               
            }
        };
        obj.content=message;
        if(success!=0){
            obj.title="Поздравления!"
            obj.type='green';
            obj.buttons.tryAgain.btnClass="btn-green";
            obj.buttons.tryAgain.action=function(){
                window.location.href = "admin.php";
            }
        }
        $.confirm(obj);
}
};