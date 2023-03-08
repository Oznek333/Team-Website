<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Codebytim">
    <meta name="description" content="Front-end & Back-end development service.">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.1/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="css/hover-min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/png" href="assets/images/logo.png">
    <title>Codebytim - Team</title>
</head>
<body>
    <?php require 'navbar.php'; 

// stukje tijd--------------------------------
$welcome_string="Welcome!";
$numeric_date=date("h");

//De tijd 
if($numeric_date>=0&&$numeric_date<=11)
$welcome_string="Goedemorgen!";
else if($numeric_date>=12&&$numeric_date<=17)
$welcome_string="Goedemiddag!";
else if($numeric_date>=18&&$numeric_date<=23)
$welcome_string="Goede avond!";
//Laat groet zien
echo "$welcome_string";
// --------------------------------------------


?>

</body>
</html>