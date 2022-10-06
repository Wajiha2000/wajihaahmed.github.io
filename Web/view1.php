<!DOCTYPE html>
<html>
    <head>
    <style type="text/css">
    table {
        width: 50%;
        border-collapse: collapse;
    }
    th {
        text-align: center;
        background-color: rgb(45, 56, 43);
    }
    </style>
    </head>
    <body>
        <?php  
        require('header.html');
        require('mycon.php');
            if (isset($_GET['ID'])) {
                $stdID = $_GET['ID'];
                $myquery = "Select * from VOP WHERE ID = ".$stdID;
                $data = $mycon->query($myquery);
                
                echo "<table border ='1'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>City</th>
                    <th>Language</th>
                </tr>";
                while($myrow = $data->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>" .$myrow["ID"] . "</td>";
                    echo "<td>" .$myrow["Cus_Name"]. "</td>";
                    echo "<td>" .$myrow["Cus_Email"]. "</td>";
                    echo "<td>" .$myrow["Cus_Phone"]. "</td>";
                    echo "<td>" .$myrow["Cus_City"]. "</td>";
                    echo "<td>" .$myrow["Cus_Lang"]. "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "CONTACT ADMINISTRATOR";
            }
        ?>
    </body>
</html>