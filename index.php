<?php require_once 'dbConfig.php' ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php
$stmt = $pdo->prepare(query:'SELECT  * FROM customer');
if ( $stmt->execute() ) {
    echo "<pre>";
    print_r( $stmt->fetch() );
    echo "<pre>";
}
?>

</body>
</html>