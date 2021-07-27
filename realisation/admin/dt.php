<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php $query = "SELECT COUNT(*) totaldocument FROM documents_manager"; 
                                                 $result = mysqli_query( $connection, $query ); 
                                                 $totaldocument = mysqli_fetch_assoc( $result ); 
                                                 echo $totaldocument[totaldocument]; 
                                                 ?>
                            
</body>
</html>