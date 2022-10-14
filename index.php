<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lol</title>
</head>
<body>

    <form action="" method="post">
        <input type="text" name="sth">
        <input type="submit" value="submit" name="submit">
        <input type="submit" value="display" name="display">
    </form>

    <?php
    

        
        if(isset($_POST["submit"]))
        {
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                include "dbconnect.php";
                $con = openCon();   
                $sth = $_POST["sth"];
                $sql = "INSERT INTO lol (datalol) VALUES ('$sth')";
                if(!empty($sth))
                {
                    if($con -> query($sql) === TRUE)
                    {
                        echo "Data Entered";
                    }
                }
                else{
                    echo "<br> <hr> Data haan madarchod";
                }
                closeCon($con);
            }
        }
        if(isset($_POST["display"]))
        {
            include "dbconnect.php";
            $con = openCon();
            $sql = "SELECT * FROM lol";
            $result = $con->query($sql);
            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    echo $row['datalol']."<br>";
                }
                
            }
            closeCon($con);
        }
           
    ?>

   
</body>
</html>