<?php
include_once('connection.php');
include_once('function.php');
if(!isset($_GET['rank'])){



?>
<!DOCTYPE html>
<html>
<head>
  <title>Docs Generator</title>
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
                    <h2 class="form-title">Error! No Data Posted!</h2>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
<?
}
else{
$rank=$_GET['rank'];
    $query="SELECT * FROM mytable WHERE rank=" . $rank;
            $result = mysqli_query($GLOBALS['connection'], $query);
            if(!$result){
                die('Query Failed' . mysqli_error());
            }   
            while($row=mysqli_fetch_assoc($result)){
    $tietno = $row['tietno'];
    $percentile = $row['percentile'];
    $category = $row['category'];
    $domicile = $row['domicile'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $name = $fname . ' ' . $lname;
    $email = $row['email'];
    $pemail = $row['pemail'];
    $mob = $row['mob'];
    $pmob = $row['pmob'];
    $dob = $row['dob'];
    $gender = $row['gender'];
    $father = $row['father'];
    $mother = $row['mother'];
    $addmain = $row['addmain'];
    $addstate = $row['addstate'];
    $addcity = $row['addcity'];
    $address = $addmain . ', ' . $addcity . ', ' . $addstate;
    $permadd = $row['permadd'];
    $board = $row['board'];
    $jeejanroll = $row['jeejanroll'];
    $jeeaprroll = $row['jeeaprroll'];
    $jeejanappno = $row['jeejanappno'];
    $jeeaprappno = $row['jeeaprappno'];
    $schoolstate = $row['schoolstate'];

    ?>
<!DOCTYPE html>
<html>
<head>
    <title>Performa</title>
    <link rel="stylesheet" href="bootstrap.min.css" crossorigin="anonymous">
    <style>
        .sar{
            width:673px;
        }
        .field{
            text-align:left;
            padding:0px;
            padding-left: 5px;

        }
        .tab{
            margin: 0px;
            padding-top:2px;
            padding-bottom: 2px;
            padding-left: 0px;
            padding-right: 0px;
            font-size: 0.85rem;
            border: 1px solid black;
            

        }
        
        .tab2{
            margin: 0px;
            padding-top:2px;
            padding-bottom: 2px;
            font-size: 0.85rem;
            border: 1px solid black;
            border-top: white;
        }
        .tab1{
            border-right: white;
        }
        
        #subtab1{
            padding:auto;
            padding-top:4px;
            padding-bottom: 4px;
            margin-bottom: 0px;
            border-collapse: collapse;
            font-weight: bold;
        }

        #subtab{
            padding:auto;
            padding-top:4px;
            padding-bottom: 4px;
            margin-bottom: 0px;
            border-collapse: collapse;
            text-align: left;
        }
        h2{
            font-size: 1.3rem;
        }
        .note{
            
            text-align: left;
            font-size: 0.8rem;
            margin-top: 3px;    
        }
        .foot{
            border:1px solid black;
            object-position: left;
            width:300px;
/*          margin-left:-400px; 
*/      }

        
        .footn3{
            margin-top: 20px;
            
            text-align:right;
        }

    </style>
    <script type="text/javascript">
        function abc(){
            window.print();
        }

    </script>
</head>
<body onload="abc()">
<center>
    <div class="sar">
    
        <img class ="img "src = "che2.png">
        <p style="margin-bottom: 2px; font-size: 0.85rem; text-decoration: underline;font-weight: bold;">PREFERENCE PERFORMA</p>
        <p style="margin-bottom: 2px; font-size: 0.85rem; ">Candidate fill the below details:</p>
        


        <div class= "row" >
            <div class = "col-sm-2 tab tab1">
                <p id = "subtab1">Candidate Name </p>
            </div>
            <div class = "col-sm-4 tab tab1">
                <p id = "subtab1"><?php echo $name; ?></p>
            </div>
            <div class = "col-sm-2 tab">
                <p id = "subtab1">Father’s Name</p>
            </div>
            <div class = "col-sm-4 tab">
                <p id = "subtab1"><?php echo $father; ?></p>
            </div>
        </div>

        <div class= "row" >
            <div class = "col-sm-2 tab tab1">
                <p id = "subtab1">JEE Main Rank 2019</p>
            </div>
            <div class = "col-sm-4 tab tab1">
                <p id = "subtab1"><?php echo $rank; ?></p>
            </div>
            <div class = "col-sm-2 tab">
                <p id = "subtab1">Category</p>
            </div>
            <div class = "col-sm-4 tab">
                <p id = "subtab1"><?php echo $category; ?></p>
            </div>
        </div>

        <div class= "row" >
            <div class = "col-sm-2 tab tab1">
                <p id = "subtab1">JEE Main Percentile</p>
            </div>
            <div class = "col-sm-4 tab tab1">
                <p id = "subtab1"><?php echo $percentile; ?></p>
            </div>
            <div class = "col-sm-2 tab">
                <p id = "subtab1">10+2 PCM %</p>
            </div>
            <div class = "col-sm-4 tab">
                <p id = "subtab1"></p>
            </div>
        </div>

        <p style="margin-bottom: 2px; font-size: 0.85rem; text-align: left;">Enter your option by giving your order of preference by filling appropriate code. Candidates will not be considered for admission in those disciplines for which column for order of preference is left blank. It is advisable that candidate should give preferences as per his choice for all the disciplines.</p>





        <div class= "row" >
            <div class = "col-sm-4 tab tab1">
                <p id = "subtab1">Discipline</p>
            </div>
            <div class = "col-sm-2 tab"  >
                <p id = "subtab1"  >Preferences Code</p>
            </div>

            <div class = "col-sm-2 tab tab1">
                <p id = "subtab1">Order of Preference</p>
            </div>
            <div class = "col-sm-4 tab">
                <p id = "subtab1">Preferences Code</p>
                <p >(To be filled by the Candidate)</p> 
            </div>
        </div>


        <div class= "row" >
            <div class = "col-sm-4 tab2 tab1">
                <p id = "subtab">Chemical Engineering</p>
            </div>
            <div class = "col-sm-2 tab2"  >
                <p id = "subtab">CHE</p>
            </div>

            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">1<sup>st</sup></p>
            </div>
            <div class = "col-sm-4 tab2">
                <p id = "subtab"></p>
                
            </div>
        </div>


        <div class= "row" >
            <div class = "col-sm-4 tab2 tab1">
                <p id = "subtab">Civil Engineering</p>
            </div>
            <div class = "col-sm-2 tab2 "  >
                <p id = "subtab">CIE</p>
            </div>

            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">2<sup>nd</sup></p>
            </div>
            <div class = "col-sm-4 tab2">
                <p id = "subtab"></p>
                
            </div>
        </div>


        <div class= "row" >
            <div class = "col-sm-4 tab2 tab1">
                <p id = "subtab">Computer Engineering</p>
            </div>
            <div class = "col-sm-2 tab2 "  >
                <p id = "subtab">COE</p>
            </div>

            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">3<sup>rd</sup></p>
            </div>
            <div class = "col-sm-4 tab2">
                <p id = "subtab"></p>
                
            </div>
        </div>


        <div class= "row" >
            <div class = "col-sm-4 tab2 tab1">
                <p id = "subtab">Electrical Engineering</p>
            </div>
            <div class = "col-sm-2 tab2 "  >
                <p id = "subtab">ELE</p>
            </div>

            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">4<sup>th</sup></p>
            </div>
            <div class = "col-sm-4 tab2">
                <p id = "subtab"></p>
                
            </div>
        </div>

        
        <div class= "row" >
            <div class = "col-sm-4 tab2 tab1">
                <p id = "subtab">Electronics & Communication Engineering</p>
            </div>
            <div class = "col-sm-2 tab2 "  >
                <p id = "subtab">ECE</p>
            </div>

            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">5<sup>th</sup></p>
            </div>
            <div class = "col-sm-4 tab2">
                <p id = "subtab"></p>
                
            </div>
        </div>


        <div class= "row" >
            <div class = "col-sm-4 tab2 tab1">
                <p id = "subtab">Electronics (Instrumentation & Control) Engineering</p>
            </div>
            <div class = "col-sm-2 tab2 "  >
                <p id = "subtab">EIC</p>
            </div>

            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">6<sup>th</sup></p>
            </div>
            <div class = "col-sm-4 tab2">
                <p id = "subtab"></p>
                
            </div>
        </div>



        <div class= "row" >
            <div class = "col-sm-4 tab2 tab1">
                <p id = "subtab">Mechanical Engineering</p>
            </div>
            <div class = "col-sm-2 tab2 "  >
                <p id = "subtab">MEE</p>
            </div>

            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">7<sup>th</sup></p>
            </div>
            <div class = "col-sm-4 tab2">
                <p id = "subtab"></p>
                
            </div>
        </div>

        <div class= "row" >
            <div class = "col-sm-4 tab2 tab1">
                <p id = "subtab">Electronics and Computer Engineering</p>
            </div>
            <div class = "col-sm-2 tab2 "  >
                <p id = "subtab">ENC</p>
            </div>

            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">8<sup>th</sup></p>
            </div>
            <div class = "col-sm-4 tab2">
                <p id = "subtab"></p>
                
            </div>
        </div>

        <div class= "row" >
            <div class = "col-sm-4 tab2 tab1">
                <p id = "subtab">Mechatronics</p>
            </div>
            <div class = "col-sm-2 tab2 "  >
                <p id = "subtab">MEC</p>
            </div>

            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">9<sup>th</sup></p>
            </div>
            <div class = "col-sm-4 tab2">
                <p id = "subtab"></p>
                
            </div>
        </div>

        <div class= "row" >
            <div class = "col-sm-4 tab2 tab1">
                <p id = "subtab">Mechanical Engineering (Production)</p>
            </div>
            <div class = "col-sm-2 tab2 "  >
                <p id = "subtab">MPE</p>
            </div>

            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">10<sup>th</sup></p>
            </div>
            <div class = "col-sm-4 tab2">
                <p id = "subtab"></p>
                
            </div>
        </div>

        <div class= "row" >
            <div class = "col-sm-4 tab2 tab1">
                <p id = "subtab">Computer Science & Engineering 
(Derabassi Campus)
</p>
            </div>
            <div class = "col-sm-2 tab2 "  >
                <p id = "subtab">COSE</p>
            </div>

            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">11<sup>th</sup></p>
            </div>
            <div class = "col-sm-4 tab2">
                <p id = "subtab"></p>
                
            </div>
        </div>

        <div class= "row" >
            <div class = "col-sm-4 tab2 tab1">
                <p id = "subtab">Computer Science & Engineering (Patiala Campus)</p>
            </div>
            <div class = "col-sm-2 tab2 "  >
                <p id = "subtab">COPC</p>
            </div>

            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">12<sup>th</sup></p>
            </div>
            <div class = "col-sm-4 tab2">
                <p id = "subtab"></p>
                
            </div>
        </div>

        <div class= "row" >
            <div class = "col-sm-4 tab2 tab1">
                <p id = "subtab">Computer Science and Business Systems</p>
            </div>
            <div class = "col-sm-2 tab2 "  >
                <p id = "subtab">COBS</p>
            </div>

            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">13<sup>th</sup></p>
            </div>
            <div class = "col-sm-4 tab2">
                <p id = "subtab"></p>
                
            </div>
        </div>

        <div class= "row" >
            <div class = "col-sm-4 tab2 tab1">
                <p id = "subtab">Biotechnology</p>
            </div>
            <div class = "col-sm-2 tab2 "  >
                <p id = "subtab">BT</p>
            </div>

            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">14<sup>th</sup></p>
            </div>
            <div class = "col-sm-4 tab2">
                <p id = "subtab"></p>
                
            </div>
        </div>

        <div class= "row" >
            <div class = "col-sm-4 tab2 tab1">
                <p id = "subtab">Biomedical Engineering</p>
            </div>
            <div class = "col-sm-2 tab2 "  >
                <p id = "subtab">BME</p>
            </div>

            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">15<sup>th</sup></p>
            </div>
            <div class = "col-sm-4 tab2">
                <p id = "subtab"></p>
                
            </div>
        </div>

        <div class= "row" >
            <div class = "col-sm-4 tab2 tab1">
                <p id = "subtab">Computer Engineering – MBA</p>
            </div>
            <div class = "col-sm-2 tab2 "  >
                <p id = "subtab">COEM</p>
            </div>

            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">16<sup>th</sup></p>
            </div>
            <div class = "col-sm-4 tab2">
                <p id = "subtab"></p>
                
            </div>
        </div>

        <div class= "row" >
            <div class = "col-sm-4 tab2 tab1">
                <p id = "subtab">Electronics & Communication Engineering – MBA</p>
            </div>
            <div class = "col-sm-2 tab2 "  >
                <p id = "subtab">ECEM</p>
            </div>

            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">17<sup>th</sup></p>
            </div>
            <div class = "col-sm-4 tab2">
                <p id = "subtab"></p>
                
            </div>
        </div>

        <div class= "row" >
            <div class = "col-sm-4 tab2 tab1">
                <p id = "subtab">Mechanical Engineering – MBA</p>
            </div>
            <div class = "col-sm-2 tab2 "  >
                <p id = "subtab">MEEM</p>
            </div>

            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">18<sup>th</sup></p>
            </div>
            <div class = "col-sm-4 tab2">
                <p id = "subtab"></p>
                
            </div>
        </div>

        


        <div class = "note"><p>The above statements are true and correct to the best of my knowledge and belief</p></div>
        

            <p class = "footn3" style="margin-top: 40px;">Signature of Applicant</p>

        </div>
        
    </div>
</center>




</body>
</html>

<?php
}
}
?>