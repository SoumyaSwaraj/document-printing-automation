<?php
include_once('connection.php');
include_once('function.php');
if(!isset($_POST['rank'])){



?>
<!DOCTYPE html>
<html>
<head>
  <title>Document Generator</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet"> 
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
        .form-title{


                font-family: 'Fjalla One', sans-serif;


        }
    </style>
</head>
<body style="background-color:black;">
      <div class="main">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" action="print.php" class="signup-form needs-validation" target="_blank">
                    <h2 class="form-title">Generate Challans</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="rank" id="name" placeholder="Rank" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Print Docs" />
                            
                        </div>
                        
                    </form>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
<?php
}
else{
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Error</title>
    </head>
    <body>
    No Access For You Buddy!
    </body>
    </html>
    <?php
}
?>