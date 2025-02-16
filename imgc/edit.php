<?php
/*$servername="localhost";
$username="root";
$password="";
$database="sgnews";

//create connection
$connection=new mysqli( $servername, $username, $password, $database);*/

include 'config.php';

$id="";
$name="";
$email="";
$phone="";
$address="";

$errorMessage="";
$successMessage="";

If($_SERVER['REQUEST_METHOD'] == 'GET'){
     //GET method: Show the data of the client
     If(!isset($_GET["id"])){
        header("location: /weblab/admin.php");
        exit;
     }

     $id=$_GET["id"];

     //read the row of the selected client from database table
     $sql="SELECT * FROM clients WHERE id=$id";
     $result=$connection->query($sql);
     $row= $result->fetch_assoc();

     if(!$row){
        header("location: /weblab/admin.php");
        exit;
     }

     $name=$row["name"];
     $email=$row["email"];
     $phone=$row["phone"];
     $address=$row["address"];
 
}
else{
    //POST method: Update the data of the client

    $id=$_POST["id"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];

    do {
        if (empty($id) || empty($name) || empty($email) || empty($phone) || empty($address)){
            $errorMessage="All the fields are required";
            break;
        }
        //$sql= "UPDATE clients"."SET name='$name', email='$email', phone='$phone', address='$address'". "WHERE id = $id";
        //$sql= "UPDATE clients (name, email, phone, address)". "VALUES ('$name', '$email', '$phone', '$address')"."WHERE id = $id";
        //$sql= "UPDATE clients"."SET `name`='[$name]',`email`='[$email]',`phone`='[$phone]',`address`='[$address]'"." WHERE id = $id";
        //$sql= "UPDATE SET clients name='$name', email='$email', phone='$phone', address='$address'
        $sql = "UPDATE clients 
        SET name = '$name', 
            email = '$email', 
            phone = '$phone', 
            address = '$address' 
        WHERE id = $id";
           
        $result=$connection->query($sql);

        If(!$result){
            $errorMessage="Invalid query: " . $connection->error;
            break;
        }

        $successMessage="Client updated successfully";

        header("location: /weblab/admin.php");
        exit;

    } while (true);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <style>
        body {
            background-color:rgb(255, 250, 225);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form{
            background: rgb(250, 246, 195);
            padding: 15px;
            box-shadow: 0px 0px 10px 0px;
            border-radius: 10px;
        }
    </style>
    <title>SG News-Adminlog</title>

</head>
<body>
    <div class="container my-5">
        <h2>Update Client Informations</h2>

        <?php
        if(!empty($errorMessage)){
            echo"
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>

        <form method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Phone</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
                </div>
            </div>
            
            <?php
            if(!empty($successMessage)){
                echo"
            <div class='row mb-3'>
                <div class='offset-sm-3 col-sm-6'>
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>$successMessage</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                </div>
            </div>
            ";
            }
            ?>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-danger" href="/weblab/admin.php" role="button">Cancel</a>
                </div>
            </div>

        </form>

    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>