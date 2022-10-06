<?php require('./header.html');?>
<div class="contact">
    <form method="POST">
        <div class="contact">
            <div class="con">
                <h1>INSERT YOUR DATA</h1>
            </div>
            <table>
                <tr>
                    <td><label>Name: </label><td>
                    <td><input type="text" name="Cus_Name"><td>
            
                </tr>
                <tr>
                    <td><label>Email: </label><td>
                    <td><input type="email" name="Cus_Email"><td>
                </tr>
                <tr>
                    <td><label>Phone: </label><td>
                    <td><input type="number" name="Cus_Phone"><td>
                </tr>
                <tr>
                    <td><label>City: </label><td>
                    <td><input type="text" name="Cus_City"><td>
                </tr>
                <tr>
                    <td><label>Language: </label><td>
                    <td><input type="text" name="Cus_Lang"><td>
                </tr>
            </table><br>
            <input type="submit" name="subm" value="Submit">
        </div><br><br>
    </form>
</div>
    <?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $database = "theprotec_db";

    $con = new mysqli($serverName, $userName,$password, $database);
    if($con->connect_error)
    {
        echo "unable to connect database <br>";
    }
    else {
        // echo "database connected<br> ";
    }
    if(isset($_POST['subm'])){
        $Errors = [];
        if((empty($_POST['Cus_Name']))){
            array_push($Errors,"Name Is Required");
        }
        if(empty($_POST['Cus_Email'])){
            array_push($Errors,"Email Is Required");
        }
        if(empty($_POST['Cus_Phone'])){
            array_push($Errors,"Phone Is Required");
        }
        if(empty($_POST['Cus_City'])){
            array_push($Errors,"City Is Required");
        }
        if(empty($_POST['Cus_Lang'])){
            array_push($Errors,"Lang Is Required");
        }
        // array_push($Errors,"Phone Is Required");
        // var_dump($Errors);
        if (count($Errors) > 0){
            
            foreach ($Errors as $value) {
            echo "$value <br>";
          }
        }
        else{
            $qry = "insert into VOP (`Cus_Name`, `Cus_Email`, `Cus_Phone`, `Cus_City`, `Cus_Lang`)values (
                '".$_POST['Cus_Name']."',
                '".$_POST['Cus_Email']."',
                '".$_POST['Cus_Phone']."',
                '".$_POST['Cus_City']."',
                '".$_POST['Cus_Lang']."');";
            
            if($con->query($qry)){
                echo "data inserted ";
            }
            else {
                echo "Error: " . $qry . "<br>" . $con->error;
            }
        
        }
}
    require('footer.html');
    ?>
