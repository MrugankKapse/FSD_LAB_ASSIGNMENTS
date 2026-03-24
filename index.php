<!DOCTYPE html>
<html>
<body>

<h2>Student Registration</h2>

<form method="POST" action="insert.php" onsubmit="return validateForm()">
    First Name: <input type="text" name="fname" required><br><br>
    Last Name: <input type="text" name="lname" required><br><br>
    Roll No: <input type="text" name="roll" required><br><br>
    Password: <input type="password" name="pass" required><br><br>
    Confirm Password: <input type="password" name="cpass" required><br><br>
    Contact: <input type="text" name="contact" required><br><br>

    <input type="submit" value="Register">
</form>

<br>
<a href="view.php">View Students</a>

<script>
function validateForm() {
    let pass = document.forms[0]["pass"].value;
    let cpass = document.forms[0]["cpass"].value;

    if (pass !== cpass) {
        alert("Passwords do not match!");
        return false;
    }
    return true;
}
</script>

</body>
</html>