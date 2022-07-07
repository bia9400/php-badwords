<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $censura=$_GET["censored"];
    $parag= "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Dignissimos iste sapiente corrupti magni esse distinctio accusamus quam iure. 
    Dolorum sapiente id laudantium tenetur voluptas assumenda voluptatum, perferendis
     itaque quidem vel?";
     $replaced =str_ireplace($censura, "***",$parag );
     
    ?>
    <h2><strong style="color: red;">Paragrafo:</strong>  <?php echo $parag ?>  <br> <strong style="color: red;">Lunghezza pargrafo:</strong>  <?php echo strlen($parag)?> </h2>
    <h1 style="margin-top: 3rem;">Paragrafo censurato:</h1>
    <h2><strong style="color: red;">Paragrafo:</strong>  <?php echo $replaced ?>  <br> <strong style="color: red;">Lunghezza pargrafo:</strong>  <?php echo strlen($replaced)?> </h2>
</body>
</html>