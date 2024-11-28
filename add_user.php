<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud_app</title>
    <!-- bootstrap link  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- icons link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <div class="container mt-5">
        <div class="head d-flex justify-content-between align-items-center">
            <h1 >Add users</h1>
            <a href="index.php">
            <i class='bx bx-left-arrow-alt bx-lg'></i>
            </a>
        </div>

    <form action="index.php" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" required>
        </div>

        <div class="mb-3">
            <label for="mobile" class="form-label">Phone number</label>
            <input type="number" class="form-control" name="mobile" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>

        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>



    <!-- bootstrap link -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>