<?php
    // Message Vars
    $msg = '';
    $msgClass = ''; 
    // Check For Submit
    if(filter_has_var(INPUT_POST, 'submit')){
        // Get Form Data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        //Check Required fields
        if(!empty($email) && !empty($name) && !empty($message)){
            // Passed
            // check Email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                //failed
                $msg = 'Please use a valid email';
                $msgClass = 'alert-danger';
            } else {
                //Passed
                //Recepian Email
                $toEmail = 'vladimirbasaric@gmail.com';
                // Subject
                $subject = 'Contact Request From '.$name;
                $body = '<h2>contact Request</h2>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Message</h4><p>'.$message.'</p>';

                // Email Headers
                $headers = "MIME-Version: 1.0" ."\r\n";
                $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

                // Aditional Headers 
                $headers .= "From: " . $name. "<".$email.">". "\r\n";

                if(mail($toEmail, $subject, $body, $headers)){
                    //Email sent
                    $msg = 'Your Email has been sent';
                    $msgClass = 'alert-success';
                } else {
                    // Failed
                    $msg = 'Your Email was not sent';
                    $msgClass = 'alert-danger';
                }
            }
        } else {
            // Failed
            $msg = 'Please fill in all fields';
            $msgClass = 'alert-danger';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/cosmo/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">My Website</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php if($msg != ''): ?>
            <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
        <?php endif; ?>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
            </div>
            <br>
            <button type="submit" name="submit" slass="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>