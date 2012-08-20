{$message}
<form action="register.php" method="POST">
    <label for="username">Username:</label>
    <br />
    <input type="text" name="username" id="useraname" maxlength="30"  /></p>

    <label for="password">Password:</label>
    <br />
    <input type="password" id="password" name="password" maxlength="30"  /></p>

    <label for="rpassword">Repeat Password:</label>
    <br />
    <input type="password" id="rpassword" name="rpassword" maxlength="30"  /></p>

    <label for="fname">First Name:</label>
    <br />
    <input type="text" id="fname" name="fname" maxlength="30"  /></p>

    <label for="lname">Last Name:</label>
    <br />
    <input type="text" id="lname" name="lname" maxlength="30"  /></p>

    <input type="submit" name="submit" value="Register" />
</form>