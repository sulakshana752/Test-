<html>
    <head>
        <meta charset="utf-8"
    </head>
    <body>
        <h1>Form Results</h1>
        <div id="main-content">
            First Name:<?php print $_POST['name']?> <br>
            Middel Name:<?php print $_POST['name1']?> <br>
            Last Name:<?php print $_POST['name2']?> <br>
            Email:<?php print $_POST['email']?> <br>
            Telephone:<?php print $_POST['tel']?> <br>
            Date:<?php print $_POST['date']?> <br>
            Gender:<?php print $_POST['gender']?> <br>
            Username:<?php print $_POST['Username']?> <br>
            Password:<?php print $_POST['Password']?> <br>
            Agree:<?php print $_POST['agree']?> <br>
            Country:<?php print $_POST['option']?> <br>
            Comments:<?php print $_POST['comments']?><br>
            <?php
            $message = "name:" .$_POST['name']."\n";
            $message .= "Email:" .$_POST['email']."\n";
            mail("sulakshana752@gmail.com","new Registration",$message,"from:sulakshana752@gmail.com");
            ?>
                    </div>
    </body>
</html>