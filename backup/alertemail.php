    <?php

    if (empty($_POST) === false) {

        $errors = array();
        
        $emailsubject       = $_POST ['emailsubject'];

        $emailname       = $_POST ['emailname'];
        $emailbusiness      = $_POST ['emailbusiness'];
        $emailphone    = $_POST ['emailphone'];
        $emailmobile       = $_POST ['emailmobile'];
        $emailemail      = $_POST ['emailemail'];
        $emailmessage    = $_POST ['emailmessage'];
        
        if (empty($emailname) === true || empty($emailemail) === true || empty($emailmessage) === true) {
            
            $errors[] = '<div class="container"><div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><h4>Name, email and message required! Please try again.</h4></div></div>';
            
        } else {
        
            if(filter_var($emailemail, FILTER_VALIDATE_EMAIL) === false){
                $errors[] = '<div class="container"><div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><h4>That\'s not a valid email address. Please try again.</h4></div></div>';
            }
            
            // if (ctype_alpha($name) === false) {
            //     $errors[] = '<div class="container"><div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><h4>Name must only contain letters! Please try again.</h4></div></div>';
            // }
            
        }
        
        if (empty($errors) === true) {
        
            mail('contact@discovernewtown.co.nz', ' ' . $emailsubject . ' ', 'Subject: ' . $emailsubject . ". \n" . 'Name: ' . $emailname . ". \n" . 'Business / Organisation: ' . $emailbusiness . ". \n" . 'Email address: ' . $emailemail . ". \n" . 'Phone number: ' . $emailphone . ". \n" . 'Mobile number: ' . $emailmobile . ". \n" . 'Message: ' . $emailmessage, 'From: website@discovernewtown.co.nz');
            header('Location: ?sent');
            
            exit();
        
        }
        
    }

    ?>

    <?php

    if (isset($_GET['sent']) === true) {

        echo '<div class="container"><div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><h4>Your email was sent!</h4></div></div>';
        
    } else {

        if (empty($errors) === false) {
            
            foreach($errors as $error) {
            
            echo $error;
                
            }
            
        }

    }

    ?>

        <?php

    // if (empty($_POST) === false) {

    //     $errors = array();
        
    //     $name       = $_POST ['name'];
    //     $email      = $_POST ['email'];
    //     $message    = $_POST ['message'];
        
    //     if (empty($name) === true || empty($email) === true || empty($message) === true) {
            
    //         $errors[] = '<div class="container"><div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><h4>Name, email and message required! Please try again.</h4></div></div>';
            
    //     } else {
        
    //         if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
    //             $errors[] = '<div class="container"><div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><h4>That\'s not a valid email address. Please try again.</h4></div></div>';
    //         }
            
    //         // if (ctype_alpha($name) === false) {
    //         //     $errors[] = '<div class="container"><div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><h4>Name must only contain letters! Please try again.</h4></div></div>';
    //         // }
            
    //     }
        
    //     if (empty($errors) === true) {
        
    //         mail('contact@discovernewtown.co.nz', 'Website contact form', 'Name: ' . $name . '. Message: ' . $message, 'From: ' . $email);
    //         header('Location: ?sent');
            
    //         exit();
        
    //     }
        
    // }

    ?>

    <?php

    // if (isset($_GET['sent']) === true) {

    //     echo '<div class="container"><div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><h4>Your email was sent!</h4></div></div>';
        
    // } else {

    //     if (empty($errors) === false) {
            
    //         foreach($errors as $error) {
            
    //         echo $error;
                
    //         }
            
    //     }

    // }

    ?>