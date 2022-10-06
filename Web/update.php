<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
        .update {
            margin: 20px 100px 20px 100px;
            text-align: center;
        }
        .update table {
            width: 100%;
        }
        .update tr:nth-child(even) {
            background-color: rgb(45, 56, 43);
        }
        .update tr:nth-child(odd) {
            background: black;
        }
        .update td a {
            text-decoration : none;
            color: white;
        }
        </style>
    </head>
    <body>
        <?php
        require('header.html');
        require('mycon.php');
        ?>
        <div class="update">
            <table>
                <tr>
                <th>Cus Name</th>
                <th>Cus Email </th>
                <th>Cus Phone</th>
                <th>Cus City</th>
                <th>Cus Language</th>
                <th>Update</th>
                </tr>
                    <?php 
                    $myqry = "SELECT * FROM VOP";
                    $result=$mycon->query($myqry);
                    while ($myrow=$result->fetch_assoc()) 
                        {
                    ?>
                    <tr>		
                    <td><?php echo $myrow['Cus_Name']; ?></td>
                    <td><?php echo $myrow['Cus_Email']; ?></td>
                    <td><?php echo $myrow['Cus_Phone']; ?></td>
                    <td><?php echo $myrow['Cus_City']; ?></td>
                    <td><?php echo $myrow['Cus_Lang']; ?></td>
                    <td><a href="update1.php?ID=<?php echo $myrow['ID'];?>">Update</a></td>
                    </tr>
                    <?php 
                        } 
                    ?>
            </table>
        </div>		
        <?php 
        require "footer.html";
        ?>
    </body>
</html>
