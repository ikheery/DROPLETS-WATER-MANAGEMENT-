<?php
    if(!empty($_GET["page"])){
        $page = $_GET["page"];
        if($page == "home"){
            $page = "views/home.php";
        }elseif($page == "adm"){
            $page = "views/adm.php";

        }
        elseif($page == "login"){
            $page = "views/login.php";
            }
        elseif($page == "chat"){
            $page = "views/chat.php";
            
        }
        elseif($page == "pay1"){
            $page = "views/pay1.php";
            
        }
        elseif($page == "pay2"){
            $page = "views/pay2.php";
            
        }
        elseif($page == "log"){
            $page = "views/log.php";
        }elseif($page == "register"){
            $page = "views/register.php";
        }elseif($page == "Our-history"){
            $page = "views/Our-history.php";
        }
        elseif($page == "talk"){
            $page = "views/talk.php";

        }
            elseif($page == "talka"){
            $page = "views/talka.php";}
         elseif($page == "billspayment"){
            $page = "views/billspayment.php";
        }
        elseif($page == "information"){
            $page = "views/information.php";
        }
        elseif($page == "Management"){
            $page = "views/Management.php";
        }
        elseif($page == "Board"){
            $page = "views/Board.php";
        }
        elseif($page == "Chairman"){
            $page = "views/Chairman.php";
        }
        elseif($page == "Water_connection"){
            $page = "views/Water_connection.php";
        }
        elseif($page == "Sewage"){
            $page = "views/Sewage.php";
        }
        elseif($page == "customer"){
            $page = "views/customer.php";
        }
        elseif($page == "Pay-mpesa"){
            $page = "views/Pay-mpesa.php";
        }
        elseif($page == "adimine"){
            $page = "views/adimine.php";
        }
         elseif($page == "display"){
            $page = "views/display.php";
        }
            elseif($page == "update"){
            $page = "views/update.php";
        }
         elseif($page == "delete"){
            $page = "views/delete.php";
        }
         elseif($page == "pay"){
            $page = "views/pay.php";
        }

        elseif($page == "Contact"){
            $page = "views/Contact.php";
        }
        elseif($page == "dash"){
             $page = "views/dashboard.php";
        }elseif($page == "cse"){
            $page = "views/cse.php";
        }else{
            $page = "views/home.php";
        }
    }else{
        $page = "views/home.php";
    }


