
<?php
    // Include the database connection file
    include_once ("db_conn.php");
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
    }

    
    // prepare(): Prepares the SQL statement for execution.
    //The ? placeholders are used for binding parameters.
    $stmt = $conn->prepare("INSERT INTO users_info (username, email, mobile, password) 
        VALUES (?,?,?,?)");


    // bind_param(): Binds user input to the query in a secure way.
    // "ssss" specifies the data types (all strings in this case).
    $stmt->bind_param('ssis',$username, $email, $mobile, $password);

    // execute(): Executes the prepared statement.
    $stmt->execute();

    $stmt->close();



    // 's': String (for username and email).
    // 'i': Integer (for mobile).
    // 's': String (for password)

}




    // SQL query to retrieve user data 

    $sql = "SELECT * FROM users_info";// Fetch all rows from table
    $result = $conn->query($sql); // Sends the query to the database (the result is stored in $result)

?>

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
            <h1 >Users</h1>
            <a href="add_user.php">
                <button type="button" class="btn btn-primary px-5">
                <i class='bx bx-user-plus bx-md'></i>
            </button>
            </a>

        </div>

        <table class="table table-striped mt-5">
            <thead class="table-primary">
                <tr>
                <th scope="col">#</th>
                <th scope="col">username</th>
                <th scope="col">email</th>
                <th scope="col">mobile</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    if($result->num_rows >0){ //Check for Available Data
                        while($row=$result->fetch_assoc()){
                            //Fetches each row from the database as an associative array. Each column can be accessed using its name
                            echo '<tr>';
                            echo '<td> ' .$row['id'].'</td>';
                            echo '<td> ' .$row['username'].'</td>';
                            echo '<td> ' .$row['email'].'</td>';
                            echo '<td> ' .$row['mobile'].'</td>';
                        }
                    }else{
                        //If there are no rows, display a message
                        echo '<tr><td colspan ="4" > NO users found </td></tr>';
                    }
                ?>

            </tbody>
        </table>
    </div>





    <script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php
    // Close the database connection
    $conn->close();
?>