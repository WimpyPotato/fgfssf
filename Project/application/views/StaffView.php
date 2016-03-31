<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <h1>Staff Directory</h1>
        <a href="StaffController/logout">Logout</a><br/>
            <?php
            echo "Welcome ".$name. "!<br/>";
            echo "Records from database<br/>";

            echo "<br/>Title |  First Name | Last Name | Position | Department | Email | Office | PhoneNo. | Description<br/>";

            foreach ($records as $r) {
                echo $r->Title . " " . $r->FirstName . " " . $r->LastName . " " . $r->Position . " " .
                $r->Department . " " . $r->Email . " " . $r->Office . " " . $r->PhoneNo . " " .
                $r->Description . "<br/>";
            }
            ?>
    </body>
</html>