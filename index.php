<!DOCTYPE html>
<!--Document declaration-->
<?php
/*Email Set up
User sends an email via the contact form
Message sent will be false until the user is able to fill all the boxes with valid information
Includes validation to confirm information is not "spam"
*/
$message_sent = false;
if(isset($_POST['name'], $_POST['email'], $_POST['message'])
 && $_POST['name'], $_POST['email'], $_POST['message'] != ''){
    
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $userMessage = $_POST['message'];
    
    $to = "desmondlambkin17@gmail.com";
    $subject = "Contact Form";
    $body = "";
    
    $body .= "From: ".$userName. "\r\n";
    $body .= "Email: ".$userEmail. "\r\n";
    $body .= "Message: ".$userMessage. "\r\n";
    
    mail($to,$subject,$body);

    $message_sent = true;
    }
    else {
        $invalid_class_name = "form-invalid";
    } 
}
?>
<html>
    <!--Beginning of HTML document-->
    <head>
        <!--Information about the web document-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Desmond Lambkin</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
        <!--Using fontAwesome-->
        <link rel="stylesheet" href="app.css">
        <!--Links to CSS Stylesheet-->
    </head>
    <body>   
	    <section id="contact-form">
        <!--Contact form section-->
            <form method="POST" action="">
            <!--Beginning of form and mail to my email address-->
                <div class="contact-left">
                <!--Contact info on the left side-->
                    <h1 class="c-l-heading">Contact</h1>
                    <!--Major heading-->
                    <div class="f-name">
                    <!--Name portion-->
                        <font>Name</font>
                        <input type="text" name="name" placeholder="Full Name" required/>
                        <!--Input field with a placeholder-->
                    </div>

                    <div class="f-email">
                    <!--email portion-->
                        <font >Email</font>
                        <input class="<?= $invalid_class_name ?? '' ?>" type="email" name="name" placeholder="Example@gmail.com" required/>
                        <!--Input field with a placeholder-->
                    </div>
                </div>
        
                <div class="contact-right">
                <!--Contact info on the right side-->
                    <div class="message">
                    <!--Message portion-->
                        <font >Message</font>
                        <textarea name="message" rows="5" cols="20" placeholder="Write Message..." required></textarea>
                        <!--Textbox created-->
                    </div>
                    <button>submit</button>
                    <!--Submit button-->
                </div>
            </form>
        </section>
      







        
        <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
        <script src="app.js" async defer></script>
        <script type="text/javascript" src="js/JQuery3.3.1.js"></script>
        <script type="text/javascript">
        
              
        

        </script>
        <!--Links to the JavaScript file-->
    </body>
</html>