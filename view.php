<?php
// Starting session
session_start();
$email2=$_SESSION["curntmail"];
    
 ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/background.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<style type="text/css">
    table th, table td
    {
        width: 100px;
        padding: 5px;
        border: 1px solid #ccc;
    }
    .selected
    {
        background-color: #666;
        color: #fff;
    }
</style>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.24/themes/smoothness/jquery-ui.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.24/jquery-ui.min.js"></script>
<script type="text/javascript">
$(function () {
    $("#tblLocations").sortable({
        items: 'tr:not(tr:first-child)',
        cursor: 'pointer',
        axis: 'y',
        dropOnEmpty: false,
        start: function (e, ui) {
            ui.item.addClass("selected");
        },
        stop: function (e, ui) {
            ui.item.removeClass("selected");
            $(this).find("tr").each(function (index) {
                if (index > 0) {
                    $(this).find("td").eq(0).html(index);
                }
            });
        }
    });
});
</script>
</head>
 <body>
        <div class="parent">
        <div class="imgi"><img src="drawable/logo.png" /></div>
        <div class="text"><h1>TAMILNADU MBA/MCA ADMISSIONS </h1></div>
    </div> 
    <div class="jumbotron">
    <?php
    //  echo"$email2";
 $con=mysqli_connect("localhost","root","","counsold");
 // Check connection
 if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

$result = mysqli_query($con,"SELECT * FROM prefrence where email='$email2'");
echo"DRAG AND DROP YOUR PREFERENCES     ";
echo "<button id=\"btnconfirm\" OnClick=\"myfunc()\"> Confirm Preferences </button>
<form action=\"pdf/index.php\" method=\"get\">
  <input type=\"submit\" class=\"btn btn-primary table-hover\" value=\"generate pdf\">
</form>
<button onclick=\"location.href='payment.html'\" type=\"button\">
  payment</button>";

echo "<table class=\"table table-bordered table-hover\" id=\"tblLocations\" cellpadding=\"0\" cellspacing=\"0\" border=\"1\">
<tr>
<th>PREFERENCE</th>
<th>COLLEGE_ID</th>
<th>CATEGORY</th>
<th>DISTRICT</th>
<th>COLLEGE CODE</th>
<th>COLLEGE NAME</th>
<th>COURSE TYPE</th>

</tr>";
     
$i=1;
foreach($result as $row) {
	
    
    $v1=$row['p1'];
    $v2=$row['p2'];
    $v3=$row['p3'];
    $v4=$row['p4'];
    $v5=$row['p5'];
    $v6=$row['p6'];
    $v7=$row['p7'];
    $v8=$row['p8'];
    $v9=$row['p9'];
    $v10=$row['p10'];
    
    
    $r1 = $con->query("SELECT * from mba where p_key=$v1 ");
    $r2 = $con->query("SELECT * from mba where p_key=$v2 ");
    $r3 = $con->query("SELECT * from mba where p_key=$v3 ");
    $r4 = $con->query("SELECT * from mba where p_key=$v4 ");
    $r5 = $con->query("SELECT * from mba where p_key=$v5 ");
    $r6 = $con->query("SELECT * from mba where p_key=$v6 ");
    $r7 = $con->query("SELECT * from mba where p_key=$v7 ");
    $r8 = $con->query("SELECT * from mba where p_key=$v8 ");
    $r9 = $con->query("SELECT * from mba where p_key=$v9 ");
    $r10 = $con->query("SELECT * from mba where p_key=$v10 ");
    
   
    
    
    foreach($r1 as $row1)
    {
    echo "<td id=\"pr".$i."\">$i</td>";
    echo "<td id=\"cl".$i."\">" . $row1['p_key'] . "</td>";
    echo "<td>" . $row1['category'] . "</td>";
    echo "<td>" . $row1['district'] . "</td>";
    echo "<td>" . $row1['c_code'] . "</td>";
    echo "<td>" . $row1['c_name'] . "</td>";
    echo "<td>" . $row1['c_type'] . "</td>";
    echo "</tr>";
    $i=$i+1;
    }
    
    foreach($r2 as $row1)
    {
    echo "<td id=\"pr".$i."\">$i</td>";
    echo "<td id=\"cl".$i."\">" . $row1['p_key'] . "</td>";
    echo "<td>" . $row1['category'] . "</td>";
    echo "<td>" . $row1['district'] . "</td>";
    echo "<td>" . $row1['c_code'] . "</td>";
    echo "<td>" . $row1['c_name'] . "</td>";
    echo "<td>" . $row1['c_type'] . "</td>";
    echo "</tr>";
    $i=$i+1;
    
    }
    
    foreach($r3 as $row1)
    {
    echo "<td id=\"pr".$i."\">$i</td>";
    echo "<td id=\"cl".$i."\">" . $row1['p_key'] . "</td>";
    echo "<td>" . $row1['category'] . "</td>";
    echo "<td>" . $row1['district'] . "</td>";
    echo "<td>" . $row1['c_code'] . "</td>";
    echo "<td>" . $row1['c_name'] . "</td>";
    echo "<td>" . $row1['c_type'] . "</td>";
    echo "</tr>";
    $i=$i+1;
    }
    foreach($r4 as $row1)
    {
    echo "<td id=\"pr".$i."\">$i</td>";
    echo "<td id=\"cl".$i."\">" . $row1['p_key'] . "</td>";
    echo "<td>" . $row1['category'] . "</td>";
    echo "<td>" . $row1['district'] . "</td>";
    echo "<td>" . $row1['c_code'] . "</td>";
    echo "<td>" . $row1['c_name'] . "</td>";
    echo "<td>" . $row1['c_type'] . "</td>";
    echo "</tr>";
    $i=$i+1;
    }
    foreach($r5 as $row1)
    {
    echo "<td id=\"pr".$i."\">$i</td>";
    echo "<td id=\"cl".$i."\">" . $row1['p_key'] . "</td>";
    echo "<td>" . $row1['category'] . "</td>";
    echo "<td>" . $row1['district'] . "</td>";
    echo "<td>" . $row1['c_code'] . "</td>";
    echo "<td>" . $row1['c_name'] . "</td>";
    echo "<td>" . $row1['c_type'] . "</td>";
    echo "</tr>";
    $i=$i+1;
    }
    foreach($r6 as $row1)
    {
    echo "<td id=\"pr".$i."\">$i</td>";
    echo "<td id=\"cl".$i."\">" . $row1['p_key'] . "</td>";
    echo "<td>" . $row1['category'] . "</td>";
    echo "<td>" . $row1['district'] . "</td>";
    echo "<td>" . $row1['c_code'] . "</td>";
    echo "<td>" . $row1['c_name'] . "</td>";
    echo "<td>" . $row1['c_type'] . "</td>";
    echo "</tr>";
    $i=$i+1;
    }
    foreach($r7 as $row1)
    {
    echo "<td id=\"pr".$i."\">$i</td>";
    echo "<td id=\"cl".$i."\">" . $row1['p_key'] . "</td>";
    echo "<td>" . $row1['category'] . "</td>";
    echo "<td>" . $row1['district'] . "</td>";
    echo "<td>" . $row1['c_code'] . "</td>";
    echo "<td>" . $row1['c_name'] . "</td>";
    echo "<td>" . $row1['c_type'] . "</td>";
    echo "</tr>";
    $i=$i+1;
    }
    foreach($r8 as $row1)
    {
    echo "<td id=\"pr".$i."\">$i</td>";
    echo "<td id=\"cl".$i."\">" . $row1['p_key'] . "</td>";
    echo "<td>" . $row1['category'] . "</td>";
    echo "<td>" . $row1['district'] . "</td>";
    echo "<td>" . $row1['c_code'] . "</td>";
    echo "<td>" . $row1['c_name'] . "</td>";
    echo "<td>" . $row1['c_type'] . "</td>";
    echo "</tr>";
    $i=$i+1;
    }
    foreach($r9 as $row1)
    {
    echo "<td id=\"pr".$i."\">$i</td>";
    echo "<td id=\"cl".$i."\">" . $row1['p_key'] . "</td>";
    echo "<td>" . $row1['category'] . "</td>";
    echo "<td>" . $row1['district'] . "</td>";
    echo "<td>" . $row1['c_code'] . "</td>";
    echo "<td>" . $row1['c_name'] . "</td>";
    echo "<td>" . $row1['c_type'] . "</td>";
    echo "</tr>";
    $i=$i+1;
    }
    foreach($r10 as $row1)
    {
    echo "<td id=\"pr".$i."\">$i</td>";
    echo "<td id=\"cl".$i."\">" . $row1['p_key'] . "</td>";
    echo "<td>" . $row1['category'] . "</td>";
    echo "<td>" . $row1['district'] . "</td>";
    echo "<td>" . $row1['c_code'] . "</td>";
    echo "<td>" . $row1['c_name'] . "</td>";
    echo "<td>" . $row1['c_type'] . "</td>";
    echo "</tr>";
    $i=$i+1;
    }

}
//$i=1;
//while($row = mysqli_fetch_array($result))
//{
//echo "<td id=\"pr".$i."\">$i</td>";
//echo "<td id=\"cl".$i."\">" . $row['p_key'] . "</td>";
//echo "<td>" . $row['category'] . "</td>";
//echo "<td>" . $row['district'] . "</td>";
//echo "<td>" . $row['c_code'] . "</td>";
//echo "<td>" . $row['c_name'] . "</td>";
//echo "<td>" . $row['c_type'] . "</td>";
//echo "</tr>";
//$i=$i+1;
//}
echo "</table>";
mysqli_close($con);
?>
<script>
    function myfunc()
{
    var  table,td_match,i,j,collegeid,preid ,xhttp,preference;
    var email = "<?php echo $email2 ?>";
    // alert(email);
    table = document.getElementById("tblLocations");
    tr = table.getElementsByTagName("tr");
    var selectedcollegecode;
    for (i = 0; i < tr.length; i++)
    {
        j=i+1;
        td = tr[j].getElementsByTagName("td")[1];
        collegeid = "cl"+j.toString();
        preid = "pr"+j.toString();
        if(td){
            selectedcollegecode = document.getElementById(collegeid).textContent;
            preference = document.getElementById(preid).textContent;
            attr="p"+preference.toString();
            var dataString = '&selectedcollegecode=' + selectedcollegecode + '&email=' + email + '&attr=' + attr;
            $.ajax({
                    type: "POST",
                    url: "update.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    alert(added);
                        }       
            });    
        }
        
    }
}
</script>
</div>
</body>
</html>