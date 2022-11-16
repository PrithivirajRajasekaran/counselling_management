
<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <title></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
    text-align: left;
  border-bottom: 1px solid black;
  background=
}

tr:hover {background-color: #D6EEEE;}

</style>

</head>
<body>


            <!-- Form Start -->
            <?php
            
            $conn= new mysqli("localhost","root","","studentadmission");

            $query = 'select * from studentinfo where cutoff >=180';
            $result = mysqli_query($conn,$query) or die ('No table');
            
            print "<h2>STUDENT DETAILS..</h2>";
            
            echo("<table style= width:100%>");
            echo("<tr style =>");
            echo("<td >"."FIRSTNAME"."</td>");
            echo("<td>"."LASTNAME"."</td>");
            echo("<td>"."ADDRESS"."</td>");
            echo("<td>"."CITY"."</td>");
            echo("<td>"."PHONE NUMBER"."</td>");
            echo("<td>"."CUT-OFF"."</td>");
            echo("</tr>");
            
            while($rr=mysqli_fetch_array($result))
            {
              echo("<tr>");
              echo("<td>".$rr['fstuname']."</td>");
              echo("<td>".$rr['lstuname']."</td>");
              echo("<td>".$rr['address1']."</td>");
              echo("<td>".$rr['city']."</td>");
              echo("<td>".$rr['ph']."</td>");
              echo("<td>".$rr['cutoff']."</td>");
              echo("</tr>");
            
            
            }
            echo("</table>");
            echo"<br>";
 
            ?>

                <!-- Form End --> 


</body>

</html>