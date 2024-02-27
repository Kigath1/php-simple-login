<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <link rel="stylesheet" href="styling/styles.css">
</head>
<body>
    <div class="container">
        <form method="post" action="handle/login.php">
            <h3>Admin Login</h3>
            <div class="form-space">
                <label for="email">Username: </label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="form-space">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <div class="buttons">
                <button type="submit" name="submit" value="submitted" class="btn">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>