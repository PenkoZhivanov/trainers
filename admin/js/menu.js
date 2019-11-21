$(document).ready(function(){
            $(".menu-navigation").on('click',function(){
                var id = $(this).attr("data-id");
                switch(id){
                    case "users":
                        window.location.href="redirector.php?item="+id;
                        break;
                        case "trainers":
                        window.location.href="redirector.php?item="+id;
                        break;
                        case "news":
                        window.location.href="redirector.php?item="+id;
                        break;
                        case "sports":
                        window.location.href="redirector.php?item="+id;
                        break;
                        
                }
            }); 
});
    
