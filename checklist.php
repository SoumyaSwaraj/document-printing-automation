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
    $janroll = $row['jeejanroll'];
    $aprroll = $row['jeeaprroll'];
    $janappno = $row['jeejanappno'];
    $aprappno = $row['jeeaprappno'];
    $schoolstate = $row['schoolstate'];

<?php
        if($aprappno == ''){
            $myappno = $jeejanappno;
        }
        else
        {
            $myappno = $jeeaprappno;
        }
?>

    ?>
<!DOCTYPE html>
<html>
<head>
    <title>Checklist</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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
            font-weight: bold;
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

        .footn{
            font-size: 0.7rem;
            text-align:left;
        }
        .footn1{
            font-size: 0.7rem;
            text-align:left;
            margin:0px;
        }
        .footn2{
            font-size: 0.7rem;
            text-align:left;    
        }
        .footn3{
            margin-top: 20px;
            font-size: 0.7rem;
            text-align:left;
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
        <h2 style="text-decoration: underline;">CHECKLIST-1 OF DOCUMENTS</h2>
        <h2>(BE/BTech Admission -2019)</h2>
        <p style="font-size: 0.8em; margin-top: 1px;">(To be filled by the candidate and is required to submit at time of document checking along with following documents)</p>



        <div class ="row">
            <div class ="col-sm-8 field">
            <p style="margin-bottom: 2px; font-size: 0.85rem;">Name of Candidate : <u><b><?php echo $name; ?></b></u></p>
            </div>
            <div class = "col-sm-4 field">
                <p style="margin-bottom: 2px; font-size: 0.85rem;">TIET Application No. : <u><b><?php echo $tietno; ?></b></u></p>
            </div>
        </div>

        <div class= "row">
            <div class = "col-sm-4 field">
                <p style="margin-bottom: 2px; font-size: 0.85rem;">Schooling State : <u style="text-align:right;"><b><?php echo $schoolstate; ?></b></u></p>
            </div>
            <div class = "col-sm-5 field" style="padding-right: 0px;">
                <p style="margin-bottom: 2px; font-size: 0.85rem;">Punjab Domicile/Residence Proof Certi.<span style="border: 1px solid black; font-size: 0.85rem;"><?php echo $domicile; ?></span></p>
            </div>
            <div class="col-sm-3 field">
                <p style="margin-bottom: 2px; font-size: 0.85rem;">Category : <u><b><?php echo $category; ?></b></u></p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-4 field">
                <p style="margin-bottom: 2px; font-size: 0.85rem;">JEE (Main) Appl. no. : <u><b><?php echo $jeeaprappno; ?></b></u></p>
            </div>
            <div class="col-sm-4 field">
                <p style="margin-bottom: 2px; font-size: 0.85rem;">JEE (Main) Percentile : <u><b><?php echo $percentile; ?></b></u></p>
            </div>
            <div class="col-sm-4 field">
                <p style="margin-bottom: 2px; font-size: 0.85rem;">JEE Main Rank : <u><b><?php echo $rank; ?></b></u></p>
            </div>
        </div>


        <div class= "row" >
            <div class = "col-sm-2 tab tab1">
                <p id = "subtab1">Sr. No.</p>
            </div>
            <div class = "col-sm-8 tab tab1">
                <p id = "subtab1">Name of the Document</p>
            </div>
            <div class = "col-sm-2 tab">
                <p id = "subtab1">Received</p>
            </div>
        </div>
        <div class= "row" >
            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">1</p>
            </div>
            <div class = "col-sm-8 tab2 tab1">
                <p id = "subtab">Admission applicant form </p>
            </div>
            <div class = "col-sm-2 tab2">
                <p id = "subtab">YES/NO</p>
            </div>
        </div>
        <div class= "row" >
            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">2</p>
            </div>
            <div class = "col-sm-8 tab2 tab1">
                <p id = "subtab" style="text-align: left;">10+2 or equivalent examination DMC with <b><u>60 % (55 % FOR SC/ST)</u> in case of MODE-1 and<u> 75 % (70 % FOR SC/ST)</u> in case of MODE-2</b> in any three subjects. Phy, Math, Chem/ Biology/  Biotechnology and Technical Vocational subject</p>
            </div>
            <div class = "col-sm-2 tab2">
                <p id = "subtab">YES/NO</p>
                <p>______%</p>
            </div>
        </div>
        <div class= "row" >
            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">3</p>
            </div>
            <div class = "col-sm-8 tab2 tab1">
                <p id = "subtab">Matriculation certificate (as proof of date of birth)</p>
            </div>
            <div class = "col-sm-2 tab2">
                <p id = "subtab">YES/NO</p>
            </div>
        </div>
        <div class= "row" >
            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">4</p>
            </div>
            <div class = "col-sm-8 tab2 tab1">
                <p id = "subtab">JEE mains – 2019 admit card</p>
            </div>
            <div class = "col-sm-2 tab2">
                <p id = "subtab">YES/NO</p>
            </div>
        </div>
        <div class= "row" >
            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">5</p>
            </div>
            <div class = "col-sm-8 tab2 tab1">
                <p id = "subtab">JEE mains – 2019 result card </p>
            </div>
            <div class = "col-sm-2 tab2">
                <p id = "subtab">YES/NO</p>
            </div>
        </div>
        <div class= "row" >
            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">6</p>
            </div>
            <div class = "col-sm-8 tab2 tab1">
                <p id = "subtab">Reserved category certificate on prescribes proforma and signed from competent authority, if applicable</p>
            </div>
            <div class = "col-sm-2 tab2">
                <p id = "subtab">YES/NO</p>
            </div>
        </div>
        <div class= "row" >
            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">7</p>
            </div>
            <div class = "col-sm-8 tab2 tab1">
                <p id = "subtab" >  Punjab Domicile/Residence certificate for candidates seeking admission under <b>Punjab state</b> quota but have done 10+2 from <b>outside Punjab</b>.   </p>
            </div>
            <div class = "col-sm-2 tab2">
                <p id = "subtab">YES/NO</p>
            </div>
        </div>
        <div class= "row" >
            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">8</p>
            </div>
            <div class = "col-sm-8 tab2 tab1">
                <p id = "subtab">Affidavit for candidates seeking admission under <b>Punjab state</b> quota but have done 10+2 from <b>outside Punjab</b>.</p>
            </div>
            <div class = "col-sm-2 tab2">
                <p id = "subtab">YES/NO</p>
            </div>
        </div>

        <div class= "row" >
            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">9</p>
            </div>
            <div class = "col-sm-8 tab2 tab1">
                <p id = "subtab">Undertaking by Student & Parents. </p>
            </div>
            <div class = "col-sm-2 tab2">
                <p id = "subtab">YES/NO</p>
            </div>
        </div>


        <div class= "row" >
            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">10</p>
            </div>
            <div class = "col-sm-8 tab2 tab1">
                <p id = "subtab">Medical Fitness Certificate</p>
            </div>
            <div class = "col-sm-2 tab2">
                <p id = "subtab">YES/NO</p>
            </div>
        </div>

        <div class= "row" >
            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">11</p>
            </div>
            <div class = "col-sm-8 tab2 tab1">
                <p id = "subtab">Character Certificate</p>
            </div>
            <div class = "col-sm-2 tab2">
                <p id = "subtab">YES/NO</p>
            </div>
        </div>

        <div class= "row" >
            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">12</p>
            </div>
            <div class = "col-sm-8 tab2 tab1">
                <p id = "subtab">Migration Certificate</p>
            </div>
            <div class = "col-sm-2 tab2">
                <p id = "subtab">YES/NO</p>
            </div>
        </div>

        <div class= "row" >
            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">13</p>
            </div>
            <div class = "col-sm-8 tab2 tab1">
                <p id = "subtab">Income Certificate</p>
            </div>
            <div class = "col-sm-2 tab2">
                <p id = "subtab">YES/NO</p>
            </div>
        </div>

        <div class= "row" >
            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">14</p>
            </div>
            <div class = "col-sm-8 tab2 tab1">
                <p id = "subtab">Anti-Drugs/Alcohol Affidavit from the student and parent</p>
            </div>
            <div class = "col-sm-2 tab2">
                <p id = "subtab">YES/NO</p>
            </div>
        </div>

        <div class= "row" >
            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">15</p>
            </div>
            <div class = "col-sm-8 tab2 tab1">
                <p id = "subtab">Anti-Ragging Affidavit from the student and parent
(by registering at website https://antiragging.in)
</p>
            </div>
            <div class = "col-sm-2 tab2">
                <p id = "subtab">YES/NO</p>
            </div>
        </div>

        <div class= "row" >
            <div class = "col-sm-2 tab2 tab1">
                <p id = "subtab">16</p>
            </div>
            <div class = "col-sm-8 tab2 tab1">
                <p id = "subtab">Affidavit required in case of discontinuity of studies</p>
            </div>
            <div class = "col-sm-2 tab2">
                <p id = "subtab">YES/NO</p>
            </div>
        </div>


        <div class = "note"><p>Note: documents listed from Sr. no. 1-7 are required in original for document verification and photocopies of same will be submitted sr. no8 will be submitted original</p></div>
        <div class = "row">
        <div class = "col-sm-6 foot">
            <p class="footn">Discrepancies (IF ANY) : the following documents are required</p>
            <p class = "footn1">1._______________________</p>
            <p class = "footn1">2._______________________</p>
            <p class = "footn1">3._______________________</p>
            <p class = "footn2">I shall submit above documents on before August 31, 2019, failing appropriate action as per institute rules may be taken.</p>

            <p class = "footn3" style="margin-top: 30px;">Signature of candidate</p>

        </div>
        <div class = "col-sm-3">
        </div>

        <div class ="col-sm-3">
            <p class = "footn" style="margin-top: 80px;">Signature of candidate</p>
            <p class = "footn" style="margin-top: 50px;">Signature of checking official</p>
        </div>
    </div>
</center>




</body>
</html>

    <?php
}
}
?>