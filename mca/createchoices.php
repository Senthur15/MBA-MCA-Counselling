<?php
// Starting session
session_start();
?><html>
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
$email1 = $_POST["email"];
$_SESSION["curntmail"] = $email1;
$result = mysqli_query($con,"SELECT * FROM mba");
$districts = mysqli_query($con,"SELECT DISTINCT district FROM mba");
$category = mysqli_query($con,"SELECT DISTINCT category FROM mba");


echo "<table class=\"table table-bordered table-hover\" border='1' id=\"myTable\">
<tr>
Filter by district: <select id= \"myInput1\" onchange=\"myFunction()\">";
echo "<option Value= \"All\">All</option>";
while($row = mysqli_fetch_array($districts))
{
echo "<option Value=\"" . $row['district'] ."\">" . $row['district'] . "";
}
echo "</tr> 
<tr>Filter by Category: <select id= \"myInput2\" onchange=\"myFunction()\">";
echo "<option Value= \"All\">All</option>";
while($row = mysqli_fetch_array($category))
{
echo "<option Value=\"" . $row['category'] ."\">" . $row['category'] . "";
}
echo "</select> <button id=\"btnconfirm\" OnClick=\"submitfunction()\"> View Selection </button>
 <form action=\"view.php\" method=\"get\">
  <input type=\"submit\" value=\"Set Preferences\">
</form>
</tr>
<tr><br>SELECT ATMOST 10 PREFRENCES</tr>
<tr>
<th>SELECT</th>
<th>COLLEGE Id</th>
<th>CATEGORY</th>
<th>DISTRICT</th>
<th>COLLEGE CODE</th>
<th>COLLEGE NAME</th>
<th>COURSE TYPE</th>
<th>OC</th>
<th>BCM</th>
<th>BC</th>
<th>MBC</th>
<th>SCA</th>
<th>SC</th>
<th>ST</th>
</tr>";
$i=1;
while($row = mysqli_fetch_array($result))
{
echo "<tr id=\"tr".$i."\">";
echo"<td> <input type=\"checkbox\" id=\"ch".$i. "\"/></td>";
echo "<td id=\"cl".$i."\">" . $row['p_key'] . "</td>";
echo "<td>" . $row['category'] . "</td>";
echo "<td>" . $row['district'] . "</td>";
echo "<td>" . $row['c_code'] . "</td>";
echo "<td>" . $row['c_name'] . "</td>";
echo "<td>" . $row['c_type'] . "</td>";
echo "<td>" . $row['oc'] . "</td>";
echo "<td>" . $row['bcm'] . "</td>";
echo "<td>" . $row['bc'] . "</td>";
echo "<td>" . $row['mbc'] . "</td>";
echo "<td>" . $row['sca'] . "</td>";
echo "<td>" . $row['sc'] . "</td>";
echo "<td>" . $row['st'] . "</td>";
echo "</tr>";
$i=$i+1;
}
echo "</table>";
mysqli_close($con);

   
?>
<script>
function myFunction() {
  var input1,input2,filter1,filter2, table, tr, td1 , td2 , i, txtValue1,txtValue2;
  input1 = document.getElementById("myInput1");
  input2 = document.getElementById("myInput2");
  filter1 = input1.value.toUpperCase();
  filter2 = input2.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td2 = tr[i].getElementsByTagName("td")[2];
    td1 = tr[i].getElementsByTagName("td")[3];
    if (td1) {
      txtValue1 = td1.textContent || td1.innerText;
      txtValue2 = td2.textContent || td2.innerText;
      if((filter1 == "ALL")&&((filter2 == "ALL")) )
      {
        tr[i].style.display = "";
      }
      else if((filter1 != "ALL")&&(txtValue1.toUpperCase().indexOf(filter1) > -1)){
          if(filter2 == "ALL")
          {
            tr[i].style.display = "";
          }
          else if((filter2 != "ALL")&&(txtValue2.toUpperCase().indexOf(filter2) > -1))
          {
            tr[i].style.display = "";
          }
          else{
        tr[i].style.display = "none";
      }
      }
      else if((filter2 != "ALL")&&(txtValue2.toUpperCase().indexOf(filter2) > -1)){
          if(filter1 == "ALL")
          {
            tr[i].style.display = "";
          }
          else if((filter1 != "ALL")&&(txtValue1.toUpperCase().indexOf(filter1) > -1))
          {
            tr[i].style.display = "";
          }
          else{
        tr[i].style.display = "none";
      }
      }
      else{
        tr[i].style.display = "none";
      }
    }       
  }
}
var pref=1;
var flag=0;

function submitfunction()
{  
    var  table,checkbox,filter_id,td_match,tr_match, filter_row,j,collegeid ,xhttp,attr;
    var email = "<?php echo $email1 ?>";
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    j = 1;
    var selectedcollegecode;
    if(flag==0)
    {
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];

        if(td){

            filter_id = "ch"+j.toString();
            collegeid = "cl"+j.toString();

            filter_row = "tr"+j.toString();
            j = j+1;
       
            td_match = document.getElementById(filter_id);
            tr_match = document.getElementById(filter_row);
            attr="p"+pref.toString();
           
            if(td_match.checked == true)
            {
              tr_match.style.display = "";
              selectedcollegecode = document.getElementById(collegeid).textContent;
              var dataString = '&selectedcollegecode=' + selectedcollegecode + '&email=' + email + '&attr=' + attr;
              $.ajax({
                    type: "POST",
                    url: "insert.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    alert(added);
}
});pref=pref+1;
            }
            else{
                tr_match.style.display = "none";
            }

        }

    }
  
      flag=1;
    } 
} 
</script>
</div>
</body>
</html>
