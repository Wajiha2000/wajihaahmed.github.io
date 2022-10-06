<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <style type="text/css">
        .upd {
            margin: 20px 100px 20px 100px;
            text-align: center;
        }
        .upd td a {
            text-decoration : none;
            color: white;
        }
        </style>
    </head>
    <body>
    <?php 
    include "header.html";
    require "mycon.php";
    ?>
        <div class="upd">
            <form method="POST"> 
                <?php 
                $stdID = $_GET['ID'];
                $myquery = "Select * from VOP WHERE ID = ".$stdID;
                $data = $mycon->query($myquery);

                if ($row = mysqli_fetch_assoc($data)) {
                    $ID = $row['ID'];
                    $Cus_Name = $row['Cus_Name'];
                    $Cus_Email = $row['Cus_Email'];	
                    $Cus_Phone = $row['Cus_Phone'];
                    $Cus_City = $row['Cus_City'];
                    $Cus_Lang = $row['Cus_Lang'];
                }
                if (isset($_POST['update'])) {
                $query = "UPDATE VOP SET 
                    Cus_Name='".$_POST['Cus_Name']."',
                    Cus_Email = '".$_POST['Cus_Email']."',
                    Cus_Phone='".$_POST['Cus_Phone']."',
                    Cus_City = '".$_POST['Cus_City']."',
                    Cus_Lang='".$_POST['Cus_Lang']."'
                    where ID = '".$_POST['update']."'";

                        if ($mycon->query($query)) {
                            echo "Your Data is Updated";
                        }
                        else{
                            echo "Error: " . $query . "<br>" . $mycon->error;
                        }
                    }	
                ?>
                <div class="contact">
                    <div class="con">
                        <h1>UPDATE YOUR DATA</h1>
                    </div>
                    <table>
                        <tr>
                            <td><label>ID: </label><td>
                            <td><input type="text" name="Cus_ID" value="<?php echo $ID;?>"><td>
                    
                        </tr>
                        <tr>
                            <td><label>Name: </label><td>
                            <td><input type="text" name="Cus_Name" value="<?php echo $Cus_Name;?>"><td>
                    
                        </tr>
                        <tr>
                            <td><label>Email: </label><td>
                            <td><input type="email" name="Cus_Email" value="<?php echo $Cus_Email ?>"><td>
                        </tr>
                        <tr>
                            <td><label>Phone: </label><td>
                            <td><input type="number" name="Cus_Phone" value="<?php echo $Cus_Phone ?>"><td>
                        </tr>
                        <tr>
                            <td><label>City: </label><td>
                            <td><input type="text" name="Cus_City" value="<?php echo $Cus_City ?>"><td>
                        </tr>
                        <tr>
                            <td><label>Language: </label><td>
                            <td><input type="text" name="Cus_Lang" value="<?php echo $row['Cus_Lang'] ?>"><td>
                        </tr>
                    </table><br>
                    <input type="submit" name="update" value="update">
                </div><br><br>
            </form>
        </div>
        <?php
        require('footer.html');
        ?>
    </body>
</html>