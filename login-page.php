<?php
// Database connection settings
$servername = "localhost";
$username = "jossystem";
$password = "jakubjeborec";
$dbname = "jossystem";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming you have a function to validate the user
function validateUser($conn, $username, $hashed_password) {
    // Your user validation logic goes here
    // For example, you can query the database to check if the user exists
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $stored_hashed_password = $row['password'];

        // Check if the hashed password matches the stored hashed password
        if (password_verify($hashed_password, $stored_hashed_password)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

// If the user is validated, set the session variable
function isValidUser($conn, $username, $hashed_password) {
    // Your user authentication logic goes here
    // For example, you can check if the provided username and password match a record in the database
    if (validateUser($conn, $username, $hashed_password)) {
        session_start();
        $_SESSION['logged_in'] = true;
        return true;
    } else {
        return false;
    }
}

// Save user credentials to cookies
function saveUserCredentials($username, $password) {
    // Set the cookie expiration time to 30 days
    $expiration_time = time() + 60 * 60 * 24 * 30;
    // Set the cookie values
    setcookie('username', $username, $expiration_time);
    setcookie('password', $password, $expiration_time);
}

// Check if the user is already logged in
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // Redirect to landing-dash.html if the user is already logged in
    header('Location: landing-dash.html');
    exit;
}

// Check if the user is valid
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Hash the password
    $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    if (isValidUser($conn, $_POST['username'], $hashed_password)) {
        // Save user credentials to cookies
        saveUserCredentials($_POST['username'], $hashed_password);

        // Redirect to landing-dash.html if credentials are correct and login was successful
        header('Location: landing-dash.html');
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration to JOS system</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1 style="font-family: Arial, sans-serif;">Welcome, here for you is JOS</h1>
    <div id="container" style="font-family: Arial, sans-serif;">
        <h2>Login</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <label for="username" style="font-family: Arial, sans-serif;">Username:</label>
            <input type="text" name="username" id="username" required style="font-family: Arial, sans-serif;">
            <label for="password" style="font-family: Arial, sans-serif;">Password:</label>
            <input type="password" name="password" id="password" required style="font-family: Arial, sans-serif;">
            <input type="submit" value="Login" style="font-family: Arial, sans-serif;">
        </form>
        <h2>Registration</h2>
        <form action="signup.php" method="post">
            <label for="username" style="font-family: Arial, sans-serif;">Username:</label>
            <input type="text" name="username" id="username" required style="font-family: Arial, sans-serif;">
            <label for="email" style="font-family: Arial, sans-serif;">Email:</label>
            <input type="email" name="email" id="email" required style="font-family: Arial, sans-serif;">
            <label for="password" style="font-family: Arial, sans-serif;">Password:</label>
            <input type="password" name="password" id="password" required style="font-family: Arial, sans-serif;">
            <input type="submit" value="Signup" style="font-family: Arial, sans-serif;">
        </form>
    </div>
</body>
</html>