<?php
    //debug f-ja
    if(isset($_POST['submit'])){
        $vardas =  trim($_POST['vardas']);
        $laikas =  trim($_POST['laikas']);
        $sveciai =  trim($_POST['sveciai']);
        $data =  trim($_POST['data']);
        $email =  trim($_POST['email']);
        $phone =  trim($_POST['phone']);

        if(!empty($vardas) && !empty($laikas) && !empty($sveciai) && !empty($data) && !empty($email) && !empty($phone)) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) { 
             $from = "$email";
             $to = "milena.carnecka3@gmail.com";
             $subject = "Nauja zinute";
             $autorius = 'Nuo: ' . $vardas . ', ' . $email;
             //$zinute = htmlspecialchars($message);
             // mail($to, $subject, $autorius, $zinute, $form);
             //echo "<script>alert('Dekui.');</script>";
            }
        }
        include ('db.php');
    }
        