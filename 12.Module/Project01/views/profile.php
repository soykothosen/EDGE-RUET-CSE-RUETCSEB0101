
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>

<p> Name: <?php print_r( $output[0]["username"] ); ?> </p>
<p> Mobile: <?php print_r( $output[0]["contactnumber"] ); ?> </p>
<p> Address: <?php print_r( $output[0]["division"] ); ?> </p>

            <!-- Link to Page 2 -->
<?php $Base_Url = "/EDGE-RUET-CSE-RUETCSEB0101/12.Module/Project01"?>

<a href= "  <?php echo $Base_Url."/deleteuser"; ?>  ">Delet USer</a>

    
</body>
</html>