
<?php
// Starting session
session_start();
$email=$_SESSION["curntmail"];
//   echo"$email";  
 ?>
 <html>
<head>
<link rel="stylesheet" type="text/css" href="css/background.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
 <body>
        <div class="parent">
        <div class="img"><img src="drawable/logo.png" /></div>
        <div class="text"><h1>TAMILNADU MBA/MCA ADMISSIONS </h1></div>
    </div>
    <div class="jumbotron">
        <?php
        $con=mysqli_connect("localhost","root","","counsnew");
        // Check connection
        if (mysqli_connect_errno())
        {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $flag=0;
        for($i=1;$i<=10;$i++)
        {    
          $p=strval($i);
          $pref_key ="p".$p;
        //   echo"$pref_key";
        //   echo"$email";
        $college_id ="SELECT $pref_key from prefrence where email='$email'";
        $result = $con->query($college_id);
        $row = $result->fetch_assoc();
        $co_id= $row["$pref_key"];
        // echo $co_id;
        if($co_id==0)
        {
            continue;
        }
       
        $avi_seats="SELECT a_seat from seats where c_id='$co_id'";
        $result1 = $con->query($avi_seats);
        $row1 = $result1->fetch_assoc();
        $available_seat=$row1["a_seat"];
        // echo $available_seat;
        if($available_seat > 0)
        {  $decrmt=$available_seat-1;
            // echo $decrmt;
            $aloted="UPDATE seats set a_seat = $decrmt WHERE c_id='$co_id'";
            $result3 = $con->query($aloted);
            $crete ="INSERT INTO allotment(email,c_id)VALUES('$email','$co_id')";
            $result4 = $con->query($crete);
            $flag=1;
        break;
        }
    }
        if($flag==1)
        {
        echo "<table class=\"table table-bordered table-hover\" id=\"tblLocations\" cellpadding=\"0\" cellspacing=\"0\" border=\"1\">
        <tr>COLLEGE IN THE $i PREFRENCE IS ALLOTED<tr><tr>
        <th>DISTRICT</th>
        <th>COLLEGE CODE</th>
        <th>COLLEGE NAME</th>
        <th>COURSE TYPE</th>
        <th>PROVISIONAL ALLOTMENT</th>
        </tr>";
        // echo $co_id;
        $_SESSION["clg__id"] = $co_id;
        $result5 = mysqli_query($con,"SELECT * FROM mba WHERE p_key='$co_id'");
        // $disply="SELECT * FROM mba WHERE c_id='$co_id'";
        // $result5 = $con->query($disply);
        while($row5 = mysqli_fetch_array($result5))
       { 
        echo "<tr>";
        echo "<td>" . $row5['district'] . "</td>";
        echo "<td>" . $row5['c_code'] . "</td>";
        echo "<td>" . $row5['c_name'] . "</td>";
        echo "<td>" . $row5['c_type'] . "</td>";
        echo "<td><button onclick=\"location.href='provisionalpdf/index.php'\" type=\"button\">
        Provisional allotment</button></td>";
        echo "</tr>" ;       
        echo"</table>";
       }
        }
        else{
            echo"<b>NO SEATS AVAILABLE FOR THE GIVEN PREFERENCES</b>";
        }
      
        ?>
        <!-- <button onclick="location.href='provisionalpdf/index.php'" type="button">
            Provisional allotment</button> -->
            <br><br><br>
        <button onclick="location.href='home.html'" type="button">
            quit counselling</button>
            </div>
            </body>
            </html>