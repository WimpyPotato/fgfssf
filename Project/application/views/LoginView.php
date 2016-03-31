<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <h1>Login</h1>
<!--            print out any validation errors captured-->
            <?php echo validation_errors(); ?> 
<!--        appoints the form to the checkLogin function-->
            <?php echo form_open('LoginController/checkLogin') ?>
            
            Username: <br/>
            <input type="text" name="username"/><br/>
            
            Password: <br/>
            <input type="password" name='password'/><br/>
            
            <input type="submit" value='Login' name='submit'/>
            <form/>   
    </body>
</html>