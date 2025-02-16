<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"-->
    <style>
        body {
            background-color:rgb(225, 242, 255);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form{
            background: #fff;
            padding: 15px;
            box-shadow: 0px 0px 10px 0px;
            border-radius: 10px;
        }
    </style>
    <title>SG News-Adminlog</title>

</head>
<body>
    <div class="container my-5">
        <h2>List of Client Informations</h2>
        <a class="btn btn-success" href="/weblab/create.php" role="button">New Client</a>
        <a class="btn btn-outline-danger" href="/weblab/index.php" role="button">Logout</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                /*$servername="localhost";
                $username="root";
                $password="";
                $database="sgnews";

                //create connection
                $connection=new mysqli( $servername, $username, $password, $database);

                //Check connection
                if($connection->connect_error){
                    die("Connection failed: ".$connection->connect_error);
                }*/
                include 'config.php';

                session_start();
                if (!isset($_SESSION['user_id'])) {
                    header("location: /weblab/form.php");
                    exit;
                }
                echo "Admin Name : Welcome, " . $_SESSION['user_name'];

                //Read all row from database table

                $sql="SELECT * FROM clients";
                $result=$connection->query($sql);

                if(!$result){
                    die("Invalid query: ". $connection->error);
                }

                //Read data of ecah row
                while($row=$result->fetch_assoc()){
                    echo"
                    <tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[email]</td>
                    <td>$row[phone]</td>
                    <td>$row[address]</td>
                    <td>$row[created_at]</td>
                    <td>
                        <a class='btn btn-warning btm-sm' href='/weblab/edit.php?id=$row[id]'>Edit</a>
                        <a class='btn btn-danger btm-sm' href='/weblab/delete.php?id=$row[id]'>Delete</a>
                    </td>
                </tr>
                    ";
                }

                ?>
                <!--<tr>
                    <td>10</td>
                    <td>Bill Gates</td>
                    <td>gates@gmail.com</td>
                    <td>01783885445</td>
                    <td>New Yprk, USA</td>
                    <td>10/12/2024</td>
                    <td>
                        <a class='btn btn-warning btm-sm' href='/weblab/edit.php'>Edit</a>
                        <a class='btn btn-danger btm-sm' href='/weblab/delete.php'>Delete</a>
                    </td>
                </tr>-->
            </tbody>
        </table>

    </div>

</body>
</html>