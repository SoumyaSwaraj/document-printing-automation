<?php
include_once('connection.php');
include_once('function.php');
if(!isset($_GET['rank'])){



?>
<!DOCTYPE html>
<html>
<head>
  <title>ICICI Challan Generator</title>
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


<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<script type="text/javascript">
  function hidePrint() {
  var x = document.getElementById("btnx");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
  window.print();
  var x = document.getElementById("btnx");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
} 
function autoPrint() {
  var x = document.getElementById("btnx");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
  window.print();
  var x = document.getElementById("btnx");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
} 
</script>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 15">
<title>ICICI Challan</title>
<meta name=Originator content="Microsoft Word 15">
<link rel=File-List href="test_files/filelist.xml">
<!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>Manan Garg</o:Author>
  <o:LastAuthor>Manan Garg</o:LastAuthor>
  <o:Revision>2</o:Revision>
  <o:Created>2019-07-05T09:21:00Z</o:Created>
  <o:LastSaved>2019-07-05T09:21:00Z</o:LastSaved>
  <o:Pages>1</o:Pages>
  <o:Words>508</o:Words>
  <o:Characters>2900</o:Characters>
  <o:Lines>24</o:Lines>
  <o:Paragraphs>6</o:Paragraphs>
  <o:CharactersWithSpaces>3402</o:CharactersWithSpaces>
  <o:Version>16.00</o:Version>
 </o:DocumentProperties>
 <o:OfficeDocumentSettings>
  <o:AllowPNG/>
 </o:OfficeDocumentSettings>
</xml><![endif]-->
<link rel=themeData href="test_files/themedata.thmx">
<link rel=colorSchemeMapping href="test_files/colorschememapping.xml">
<!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:SpellingState>Clean</w:SpellingState>
  <w:TrackMoves>false</w:TrackMoves>
  <w:TrackFormatting/>
  <w:PunctuationKerning/>
  <w:ValidateAgainstSchemas/>
  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
  <w:DoNotPromoteQF/>
  <w:LidThemeOther>EN-IN</w:LidThemeOther>
  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
  <w:Compatibility>
   <w:BreakWrappedTables/>
   <w:SnapToGridInCell/>
   <w:WrapTextWithPunct/>
   <w:UseAsianBreakRules/>
   <w:DontGrowAutofit/>
   <w:SplitPgBreakAndParaMark/>
   <w:EnableOpenTypeKerning/>
   <w:DontFlipMirrorIndents/>
   <w:OverrideTableStyleHps/>
  </w:Compatibility>
  <m:mathPr>
   <m:mathFont m:val="Cambria Math"/>
   <m:brkBin m:val="before"/>
   <m:brkBinSub m:val="&#45;-"/>
   <m:smallFrac m:val="off"/>
   <m:dispDef/>
   <m:lMargin m:val="0"/>
   <m:rMargin m:val="0"/>
   <m:defJc m:val="centerGroup"/>
   <m:wrapIndent m:val="1440"/>
   <m:intLim m:val="subSup"/>
   <m:naryLim m:val="undOvr"/>
  </m:mathPr></w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="false"
  DefSemiHidden="false" DefQFormat="false" DefPriority="99"
  LatentStyleCount="376">
  <w:LsdException Locked="false" Priority="0" QFormat="true" Name="Normal"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 1"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 2"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 3"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 4"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 5"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 6"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 7"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 8"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 9"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 9"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 1"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 2"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 3"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 4"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 5"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 6"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 7"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 8"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 9"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footnote text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="header"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footer"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index heading"/>
  <w:LsdException Locked="false" Priority="35" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="caption"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="table of figures"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="envelope address"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="envelope return"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footnote reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="line number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="page number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="endnote reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="endnote text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="table of authorities"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="macro"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="toa heading"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 5"/>
  <w:LsdException Locked="false" Priority="10" QFormat="true" Name="Title"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Closing"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Signature"/>
  <w:LsdException Locked="false" Priority="1" SemiHidden="true"
   UnhideWhenUsed="true" Name="Default Paragraph Font"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Message Header"/>
  <w:LsdException Locked="false" Priority="11" QFormat="true" Name="Subtitle"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Salutation"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Date"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text First Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text First Indent 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Note Heading"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Block Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Hyperlink"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="FollowedHyperlink"/>
  <w:LsdException Locked="false" Priority="22" QFormat="true" Name="Strong"/>
  <w:LsdException Locked="false" Priority="20" QFormat="true" Name="Emphasis"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Document Map"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Plain Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="E-mail Signature"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Top of Form"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Bottom of Form"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal (Web)"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Acronym"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Address"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Cite"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Code"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Definition"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Keyboard"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Preformatted"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Sample"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Typewriter"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Variable"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation subject"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="No List"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Contemporary"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Elegant"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Professional"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Subtle 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Subtle 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Balloon Text"/>
  <w:LsdException Locked="false" Priority="39" Name="Table Grid"/>
  <w:LsdException Locked="false" SemiHidden="true" Name="Placeholder Text"/>
  <w:LsdException Locked="false" Priority="1" QFormat="true" Name="No Spacing"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 1"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 1"/>
  <w:LsdException Locked="false" SemiHidden="true" Name="Revision"/>
  <w:LsdException Locked="false" Priority="34" QFormat="true"
   Name="List Paragraph"/>
  <w:LsdException Locked="false" Priority="29" QFormat="true" Name="Quote"/>
  <w:LsdException Locked="false" Priority="30" QFormat="true"
   Name="Intense Quote"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 1"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 1"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 2"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 2"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 2"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 3"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 3"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 3"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 4"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 4"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 4"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 5"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 5"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 5"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 6"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 6"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 6"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="19" QFormat="true"
   Name="Subtle Emphasis"/>
  <w:LsdException Locked="false" Priority="21" QFormat="true"
   Name="Intense Emphasis"/>
  <w:LsdException Locked="false" Priority="31" QFormat="true"
   Name="Subtle Reference"/>
  <w:LsdException Locked="false" Priority="32" QFormat="true"
   Name="Intense Reference"/>
  <w:LsdException Locked="false" Priority="33" QFormat="true" Name="Book Title"/>
  <w:LsdException Locked="false" Priority="37" SemiHidden="true"
   UnhideWhenUsed="true" Name="Bibliography"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="TOC Heading"/>
  <w:LsdException Locked="false" Priority="41" Name="Plain Table 1"/>
  <w:LsdException Locked="false" Priority="42" Name="Plain Table 2"/>
  <w:LsdException Locked="false" Priority="43" Name="Plain Table 3"/>
  <w:LsdException Locked="false" Priority="44" Name="Plain Table 4"/>
  <w:LsdException Locked="false" Priority="45" Name="Plain Table 5"/>
  <w:LsdException Locked="false" Priority="40" Name="Grid Table Light"/>
  <w:LsdException Locked="false" Priority="46" Name="Grid Table 1 Light"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark"/>
  <w:LsdException Locked="false" Priority="51" Name="Grid Table 6 Colorful"/>
  <w:LsdException Locked="false" Priority="52" Name="Grid Table 7 Colorful"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 1"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 1"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 1"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 2"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 2"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 2"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 3"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 3"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 3"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 4"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 4"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 4"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 5"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 5"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 5"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 6"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 6"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 6"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="46" Name="List Table 1 Light"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark"/>
  <w:LsdException Locked="false" Priority="51" Name="List Table 6 Colorful"/>
  <w:LsdException Locked="false" Priority="52" Name="List Table 7 Colorful"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 1"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 1"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 1"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 2"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 2"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 2"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 3"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 3"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 3"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 4"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 4"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 4"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 5"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 5"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 5"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 6"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 6"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 6"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Mention"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Smart Hyperlink"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Hashtag"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Unresolved Mention"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Smart Link"/>
 </w:LatentStyles>
</xml><![endif]-->
<style>
<!--
 /* Font Definitions */
 @font-face
  {font-family:"Cambria Math";
  panose-1:2 4 5 3 5 4 6 3 2 4;
  mso-font-charset:0;
  mso-generic-font-family:roman;
  mso-font-pitch:variable;
  mso-font-signature:3 0 0 0 1 0;}
@font-face
  {font-family:Calibri;
  panose-1:2 15 5 2 2 2 4 3 2 4;
  mso-font-charset:0;
  mso-generic-font-family:swiss;
  mso-font-pitch:variable;
  mso-font-signature:-469750017 -1073732485 9 0 511 0;}
@font-face
  {font-family:"Arial Black";
  panose-1:2 11 10 4 2 1 2 2 2 4;
  mso-font-charset:0;
  mso-generic-font-family:swiss;
  mso-font-pitch:variable;
  mso-font-signature:-1610612049 1073772795 0 0 159 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
  {mso-style-unhide:no;
  mso-style-qformat:yes;
  mso-style-parent:"";
  margin-top:0cm;
  margin-right:0cm;
  margin-bottom:10.0pt;
  margin-left:0cm;
  line-height:115%;
  mso-pagination:widow-orphan;
  font-size:11.0pt;
  font-family:"Calibri",sans-serif;
  mso-ascii-font-family:Calibri;
  mso-ascii-theme-font:minor-latin;
  mso-fareast-font-family:Calibri;
  mso-fareast-theme-font:minor-latin;
  mso-hansi-font-family:Calibri;
  mso-hansi-theme-font:minor-latin;
  mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi;
  mso-ansi-language:EN-US;
  mso-fareast-language:EN-US;}
span.SpellE
  {mso-style-name:"";
  mso-spl-e:yes;}
.MsoChpDefault
  {mso-style-type:export-only;
  mso-default-props:yes;
  font-family:"Calibri",sans-serif;
  mso-ascii-font-family:Calibri;
  mso-ascii-theme-font:minor-latin;
  mso-fareast-font-family:Calibri;
  mso-fareast-theme-font:minor-latin;
  mso-hansi-font-family:Calibri;
  mso-hansi-theme-font:minor-latin;
  mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi;
  mso-fareast-language:EN-US;}
.MsoPapDefault
  {mso-style-type:export-only;
  margin-bottom:8.0pt;
  line-height:107%;}
@page WordSection1
  {size:595.3pt 841.9pt;
  margin:72.0pt 72.0pt 72.0pt 72.0pt;
  mso-header-margin:35.4pt;
  mso-footer-margin:35.4pt;
  mso-paper-source:0;}
div.WordSection1
  {page:WordSection1;}
-->
</style>
<!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
  {mso-style-name:"Table Normal";
  mso-tstyle-rowband-size:0;
  mso-tstyle-colband-size:0;
  mso-style-noshow:yes;
  mso-style-priority:99;
  mso-style-parent:"";
  mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
  mso-para-margin-top:0cm;
  mso-para-margin-right:0cm;
  mso-para-margin-bottom:8.0pt;
  mso-para-margin-left:0cm;
  line-height:107%;
  mso-pagination:widow-orphan;
  font-size:11.0pt;
  font-family:"Calibri",sans-serif;
  mso-ascii-font-family:Calibri;
  mso-ascii-theme-font:minor-latin;
  mso-hansi-font-family:Calibri;
  mso-hansi-theme-font:minor-latin;
  mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi;
  mso-fareast-language:EN-US;}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="1026"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body lang=EN-IN style='tab-interval:36.0pt' onload="autoPrint()">
<button id="btnx" class="btn btn-warning" style="position:fixed; top:5px; left:5px;" onclick="hidePrint()">Print</button>

<div class=WordSection1>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=1088
 style='width:816.35pt;margin-left:5.4pt;border-collapse:collapse;mso-yfti-tbllook:
 1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:22.5pt'>
  <td width=306 nowrap valign=bottom style='width:229.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:22.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US style='mso-ascii-font-family:
  Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'>FEE-DEPOSIT-SLIP(Bank
  Copy)<o:p></o:p></span></b></p>
  </td>
  <td width=75 nowrap valign=bottom style='width:56.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:22.5pt'></td>
  <td width=309 nowrap valign=bottom style='width:231.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:22.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US style='mso-ascii-font-family:
  Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'>FEE-DEPOSIT-SLIP(University
  Copy)<o:p></o:p></span></b></p>
  </td>
  <td width=74 nowrap valign=bottom style='width:55.35pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:22.5pt'></td>
  <td width=325 nowrap valign=bottom style='width:243.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:22.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US style='mso-ascii-font-family:
  Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'>FEE-DEPOSIT-SLIP(Candidate's
  Copy)<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:21.6pt'>
  <td width=306 nowrap valign=bottom style='width:229.5pt;border-top:solid windowtext 1.5pt;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US style='font-size:
  14.0pt;font-family:"Arial Black",sans-serif;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'>TIET,PATIALA<o:p></o:p></span></b></p>
  </td>
  <td width=75 nowrap valign=bottom style='width:56.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:21.6pt'></td>
  <td width=309 nowrap valign=bottom style='width:231.95pt;border-top:solid windowtext 1.5pt;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US style='font-size:
  14.0pt;font-family:"Arial Black",sans-serif;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'>TIET,PATIALA<o:p></o:p></span></b></p>
  </td>
  <td width=74 nowrap valign=bottom style='width:55.35pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:21.6pt'></td>
  <td width=325 nowrap valign=bottom style='width:243.5pt;border-top:solid windowtext 1.5pt;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US style='font-size:
  14.0pt;font-family:"Arial Black",sans-serif;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'>TIET,PATIALA<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:15.0pt'>
  <td width=306 nowrap valign=bottom style='width:229.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.5pt;
  border-right:solid black 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US style='mso-ascii-font-family:
  Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'>(Admission -<?php echo date("Y");?>)<o:p></o:p></span></b></p>
  </td>
  <td width=75 nowrap valign=bottom style='width:56.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'></td>
  <td width=309 nowrap valign=bottom style='width:231.95pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.5pt;
  border-right:solid black 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US style='mso-ascii-font-family:
  Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'>(Admission -<?php echo date("Y");?>)<o:p></o:p></span></b></p>
  </td>
  <td width=74 nowrap valign=bottom style='width:55.35pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'></td>
  <td width=325 nowrap valign=bottom style='width:243.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.5pt;
  border-right:solid black 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US style='mso-ascii-font-family:
  Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'>(Admission -<?php echo date("Y");?>)<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:15.0pt'>
  <td width=306 nowrap valign=bottom style='width:229.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US style='mso-ascii-font-family:
  Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'>ICICI BANK<o:p></o:p></span></b></p>
  </td>
  <td width=75 nowrap valign=bottom style='width:56.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'></td>
  <td width=309 nowrap valign=bottom style='width:231.95pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US style='mso-ascii-font-family:
  Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'>ICICI BANK<o:p></o:p></span></b></p>
  </td>
  <td width=74 nowrap valign=bottom style='width:55.35pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'></td>
  <td width=325 nowrap valign=bottom style='width:243.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US style='mso-ascii-font-family:
  Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'>ICICI BANK<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:15.0pt'>
  <td width=306 nowrap valign=bottom style='width:229.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.5pt;
  border-right:solid black 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US style='font-size:
  9.0pt;mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-bidi-language:
  PA'>Payable at all branches of ICICI in India <o:p></o:p></span></b></p>
  </td>
  <td width=75 nowrap valign=bottom style='width:56.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'></td>
  <td width=309 nowrap valign=bottom style='width:231.95pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.5pt;
  border-right:solid black 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US style='font-size:
  9.0pt;mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-bidi-language:
  PA'>Payable at all branches of ICICI in India <o:p></o:p></span></b></p>
  </td>
  <td width=74 nowrap valign=bottom style='width:55.35pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'></td>
  <td width=325 nowrap valign=bottom style='width:243.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.5pt;
  border-right:solid black 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US style='font-size:
  9.0pt;mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-bidi-language:
  PA'>Payable at all branches of ICICI in India <o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:15.0pt'>
  <td width=306 style='width:229.5pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:none;border-right:solid black 1.5pt;mso-border-top-alt:solid windowtext 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:8.0pt;mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'>Name of the Bank
  Branch: Thapar University, Patiala<o:p></o:p></span></p>
  </td>
  <td width=75 nowrap valign=bottom style='width:56.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'></td>
  <td width=309 style='width:231.95pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:none;border-right:solid black 1.5pt;mso-border-top-alt:solid windowtext 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:8.0pt;mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'>Name of the Bank Branch: Thapar University, Patiala<o:p></o:p></span></p>
  </td>
  <td width=74 nowrap valign=bottom style='width:55.35pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'></td>
  <td width=325 style='width:243.5pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:none;border-right:solid black 1.5pt;mso-border-top-alt:solid windowtext 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:8.0pt;mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'>Name of the Bank
  Branch: Thapar University, Patiala<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:15.0pt'>
  <td width=306 style='width:229.5pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:none;border-right:solid black 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:8.0pt;mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'>Bank Code No.: 3981<o:p></o:p></span></p>
  </td>
  <td width=75 nowrap valign=bottom style='width:56.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'></td>
  <td width=309 style='width:231.95pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:none;border-right:solid black 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:8.0pt;mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'>Bank Code No.: 3981<o:p></o:p></span></p>
  </td>
  <td width=74 nowrap valign=bottom style='width:55.35pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'></td>
  <td width=325 style='width:243.5pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:none;border-right:solid black 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:8.0pt;mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'>Bank Code No.: 3981<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:15.0pt'>
  <td width=306 style='width:229.5pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:none;border-right:solid black 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:10.0pt;mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'>IFSC:ICIC0003981<span
  style='mso-spacerun:yes'>                 </span>Date: <b><?php echo date("d/m/Y");?></b><o:p></o:p></span></p>
  </td>
  <td width=75 nowrap valign=bottom style='width:56.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'></td>
  <td width=309 style='width:231.95pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:none;border-right:solid black 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:10.0pt;mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'>IFSC:ICIC0003981<span
  style='mso-spacerun:yes'>                
  </span>Date: <b><?php echo date("d/m/Y");?></b><o:p></o:p></span></p>
  </td>
  <td width=74 nowrap valign=bottom style='width:55.35pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'></td>
  <td width=325 style='width:243.5pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:none;border-right:solid black 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:10.0pt;mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'>IFSC:ICIC0003981<span
  style='mso-spacerun:yes'>                
  </span>Date: <b><?php echo date("d/m/Y");?></b><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:15.0pt'>
  <td width=306 style='width:229.5pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.5pt;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:8.0pt;mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'>Beneficiary Name: <b>Thapar
  Hostel Mess (S) Management Society</b><o:p></o:p></span></p>
  </td>
  <td width=75 nowrap valign=bottom style='width:56.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'></td>
  <td width=309 style='width:231.95pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.5pt;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:8.0pt;mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'>Beneficiary Name: <b>Thapar
  Hostel Mess (S) Management Society</b><o:p></o:p></span></p>
  </td>
  <td width=74 nowrap valign=bottom style='width:55.35pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'></td>
  <td width=325 style='width:243.5pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.5pt;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:8.0pt;mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'>Beneficiary Name: <b>Thapar
  Hostel Mess (S) Management Society</b><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:15.6pt'>
  <td width=306 nowrap valign=bottom style='width:229.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.5pt;
  border-right:solid black 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Bank Account Number :<span
  style='mso-spacerun:yes'>     </span><b>398101000013</b><o:p></o:p></span></p>
  </td>
  <td width=75 nowrap valign=bottom style='width:56.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.6pt'></td>
  <td width=309 nowrap valign=bottom style='width:231.95pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.5pt;
  border-right:solid black 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Bank Account Number :<span
  style='mso-spacerun:yes'>     </span><b>398101000013</b><o:p></o:p></span></p>
  </td>
  <td width=74 nowrap valign=bottom style='width:55.35pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.6pt'></td>
  <td width=325 nowrap valign=bottom style='width:243.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.5pt;
  border-right:solid black 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Bank Account Number :<span
  style='mso-spacerun:yes'>     </span><b>398101000013</b><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:15.0pt'>
  <td width=306 nowrap valign=bottom style='width:229.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Total Fee Paid Rs. </span></b><span lang=EN-US
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-bidi-language:
  PA'> 15500<b><o:p></o:p></b></span></p>
  </td>
  <td width=75 nowrap valign=bottom style='width:56.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'></td>
  <td width=309 nowrap valign=bottom style='width:231.95pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Total Fee Paid Rs. </span></b><span lang=EN-US
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-bidi-language:
  PA'> 15500<b><o:p></o:p></b></span></p>
  </td>
  <td width=74 nowrap valign=bottom style='width:55.35pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'></td>
  <td width=325 nowrap valign=bottom style='width:243.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Total Fee Paid Rs. </span></b><span lang=EN-US
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-bidi-language:
  PA'> 15500<b><o:p></o:p></b></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:14.4pt'>
  <td width=306 nowrap valign=bottom style='width:229.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Bank Fee Rs. </span></b><span lang=EN-US
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-bidi-language:
  PA'> 0<b><o:p></o:p></b></span></p>
  </td>
  <td width=75 nowrap valign=bottom style='width:56.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=309 nowrap valign=bottom style='width:231.95pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Bank Fee Rs. </span></b><span lang=EN-US
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-bidi-language:
  PA'> 0<b><o:p></o:p></b></span></p>
  </td>
  <td width=74 nowrap valign=bottom style='width:55.35pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=325 nowrap valign=bottom style='width:243.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Bank Fee Rs. </span></b><span lang=EN-US
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-bidi-language:
  PA'> 0<b><o:p></o:p></b></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:15.0pt'>
  <td width=306 nowrap valign=bottom style='width:229.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.5pt;
  border-right:solid black 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Total Rs.</span></b><span lang=EN-US style='mso-ascii-font-family:
  Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'> 15500<b><o:p></o:p></b></span></p>
  </td>
  <td width=75 nowrap valign=bottom style='width:56.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'></td>
  <td width=309 nowrap valign=bottom style='width:231.95pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.5pt;
  border-right:solid black 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Total Rs.</span></b><span lang=EN-US style='mso-ascii-font-family:
  Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'> 15500<b><o:p></o:p></b></span></p>
  </td>
  <td width=74 nowrap valign=bottom style='width:55.35pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'></td>
  <td width=325 nowrap valign=bottom style='width:243.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.5pt;
  border-right:solid black 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Total Rs.</span></b><span lang=EN-US style='mso-ascii-font-family:
  Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'> 15500<b><o:p></o:p></b></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;height:15.0pt'>
  <td width=306 nowrap valign=bottom style='width:229.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Bank <span class=SpellE>Txn</span>. Journal No. </span></b><span
  lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-bidi-language:
  PA'>____________________<b><o:p></o:p></b></span></p>
  </td>
  <td width=75 nowrap valign=bottom style='width:56.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'></td>
  <td width=309 nowrap valign=bottom style='width:231.95pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Bank <span class=SpellE>Txn</span>. Journal No. </span></b><span
  lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-bidi-language:
  PA'>____________________________<b><o:p></o:p></b></span></p>
  </td>
  <td width=74 nowrap valign=bottom style='width:55.35pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'></td>
  <td width=325 nowrap valign=bottom style='width:243.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Bank <span class=SpellE>Txn</span>. Journal No. </span></b><span
  lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-bidi-language:
  PA'>____________________________<b><o:p></o:p></b></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;height:15.0pt'>
  <td width=306 nowrap valign=bottom style='width:229.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.5pt;
  border-right:solid black 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>(to be filled by the Bank Branch)<o:p></o:p></span></p>
  </td>
  <td width=75 nowrap valign=bottom style='width:56.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'></td>
  <td width=309 nowrap valign=bottom style='width:231.95pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.5pt;
  border-right:solid black 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>(to be filled by the Bank Branch)<o:p></o:p></span></p>
  </td>
  <td width=74 nowrap valign=bottom style='width:55.35pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'></td>
  <td width=325 nowrap valign=bottom style='width:243.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.5pt;
  border-right:solid black 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>(to be filled by the Bank Branch)<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;height:15.0pt'>
  <td width=306 nowrap valign=bottom style='width:229.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-language:PA'>Prog. Name: <b>BE/B.TECH/MCA/MBA/ME/M.TECH/MSc/PhD</b>
  (Please Tick)<o:p></o:p></span></p>
  </td>
  <td width=75 nowrap valign=bottom style='width:56.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'></td>
  <td width=309 nowrap valign=bottom style='width:231.95pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-language:PA'>Prog. Name: <b>BE/B.TECH/MCA/MBA/ME/M.TECH/MSc/PhD</b>
  (Please Tick)<o:p></o:p></span></p>
  </td>
  <td width=74 nowrap valign=bottom style='width:55.35pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'></td>
  <td width=325 nowrap valign=bottom style='width:243.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-language:PA'>Prog. Name: <b>BE/B.TECH/MCA/MBA/ME/M.TECH/MSc/PhD</b>
  (Please Tick)<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16;height:14.4pt'>
  <td width=306 nowrap valign=bottom style='width:229.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>AIEEE Roll. No. (for BE / B.TECH)<o:p></o:p></span></b></p>
  </td>
  <td width=75 nowrap valign=bottom style='width:56.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=309 nowrap valign=bottom style='width:231.95pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>AIEEE Roll. No. (for BE / B.TECH)<o:p></o:p></span></b></p>
  </td>
  <td width=74 nowrap valign=bottom style='width:55.35pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=325 nowrap valign=bottom style='width:243.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>AIEEE Roll. No. (for BE / B.TECH)<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:17;height:14.4pt'>
  <td width=306 nowrap valign=bottom style='width:229.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>JEE Roll. No. (New Admission)<o:p></o:p> <u> &nbsp; &nbsp; <?php echo $jeeaprroll; ?> </u></span></b></p>
  </td>
  <td width=75 nowrap valign=bottom style='width:56.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=309 nowrap valign=bottom style='width:231.95pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>JEE Roll. No. (New Admission)<o:p></o:p> <u> &nbsp; &nbsp; <?php echo $jeeaprroll; ?> </u> </span></b></p>
  </td>
  <td width=74 nowrap valign=bottom style='width:55.35pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=325 nowrap valign=bottom style='width:243.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>JEE Roll. No. (New Admission)<o:p></o:p> <u> &nbsp; &nbsp; <?php echo $jeeaprroll; ?> </u> </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:18;height:15.0pt'>
  <td width=306 nowrap valign=bottom style='width:229.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.5pt;
  border-right:solid black 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='font-size:10.0pt;mso-ascii-font-family:
  Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'>University Reg. No. <b><u>&nbsp; &nbsp; <?php echo $tietno; ?>&nbsp; &nbsp; </u></b><o:p></o:p></span></b></p>
  </td>
  <td width=75 nowrap valign=bottom style='width:56.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'></td>
  <td width=309 nowrap valign=bottom style='width:231.95pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.5pt;
  border-right:solid black 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='font-size:10.0pt;mso-ascii-font-family:
  Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'>University Reg. No. <b><u>&nbsp; &nbsp; <?php echo $tietno; ?>&nbsp; &nbsp; </u></b><o:p></o:p></span></b></p>
  </td>
  <td width=74 nowrap valign=bottom style='width:55.35pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'></td>
  <td width=325 nowrap valign=bottom style='width:243.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.5pt;
  border-right:solid black 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='font-size:9.0pt;mso-ascii-font-family:
  Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'>University Reg. No. <b><u>&nbsp; &nbsp; <?php echo $tietno; ?>&nbsp; &nbsp; </u></b><o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:19;height:15.0pt'>
  <td width=306 nowrap valign=bottom style='width:229.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><u><span lang=EN-US
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-bidi-language:
  PA'>PARTICULARS OF CANDIDATE<o:p></o:p></span></u></b></p>
  </td>
  <td width=75 nowrap valign=bottom style='width:56.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'></td>
  <td width=309 nowrap valign=bottom style='width:231.95pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><u><span lang=EN-US
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-bidi-language:
  PA'>PARTICULARS OF CANDIDATE<o:p></o:p></span></u></b></p>
  </td>
  <td width=74 nowrap valign=bottom style='width:55.35pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'></td>
  <td width=325 nowrap valign=bottom style='width:243.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><u><span lang=EN-US
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-bidi-language:
  PA'>PARTICULARS OF CANDIDATE<o:p></o:p></span></u></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:20;height:14.4pt'>
  <td width=306 nowrap valign=bottom style='width:229.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Name</span></b><span lang=EN-US style='mso-ascii-font-family:
  Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'><b><u>&nbsp; &nbsp; <?php echo $name; ?>&nbsp; &nbsp; </u></b><b><o:p></o:p></b></span></p>
  </td>
  <td width=75 nowrap valign=bottom style='width:56.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=309 nowrap valign=bottom style='width:231.95pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Name</span></b><span lang=EN-US style='mso-ascii-font-family:
  Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'><b><u>&nbsp; &nbsp; <?php echo $name; ?>&nbsp; &nbsp; </u></b><b><o:p></o:p></b></span></p>
  </td>
  <td width=74 nowrap valign=bottom style='width:55.35pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=325 nowrap valign=bottom style='width:243.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Name</span></b><span lang=EN-US style='mso-ascii-font-family:
  Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'><b><u>&nbsp; &nbsp; <?php echo $name; ?>&nbsp; &nbsp; </u></b><b><o:p></o:p></b></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:21;height:14.4pt'>
  <td width=306 nowrap valign=bottom style='width:229.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Father Name</span></b><span lang=EN-US
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-bidi-language:
  PA'><b><u>&nbsp; &nbsp; <?php echo $father; ?>&nbsp; &nbsp; </u></b><b><o:p></o:p></b></span></p>
  </td>
  <td width=75 nowrap valign=bottom style='width:56.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=309 nowrap valign=bottom style='width:231.95pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Father Name</span></b><span lang=EN-US
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-bidi-language:
  PA'><b><u>&nbsp; &nbsp; <?php echo $father; ?></u></b><b><o:p></o:p></b></span></p>
  </td>
  <td width=74 nowrap valign=bottom style='width:55.35pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=325 nowrap valign=bottom style='width:243.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b>&nbsp; &nbsp; <span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Father Name</span></b><span lang=EN-US
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-bidi-language:
  PA'><b><u>&nbsp; &nbsp; <?php echo $father; ?>&nbsp; &nbsp; </u></b><b><o:p></o:p></b></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:22;height:14.4pt'>
  <td width=306 nowrap valign=bottom style='width:229.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Address</span></b><span lang=EN-US style='mso-ascii-font-family:
  Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'><b><u>&nbsp; &nbsp; <?php echo $address; ?>&nbsp; &nbsp; </u></b><b><o:p></o:p></b></span></p>
  </td>
  <td width=75 nowrap valign=bottom style='width:56.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=309 nowrap valign=bottom style='width:231.95pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Address</span></b><span lang=EN-US style='mso-ascii-font-family:
  Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'><b><u>&nbsp; &nbsp; <?php echo $address; ?></u></b><b><o:p></o:p></b></span></p>
  </td>
  <td width=74 nowrap valign=bottom style='width:55.35pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=325 nowrap valign=bottom style='width:243.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Address</span></b><span lang=EN-US style='mso-ascii-font-family:
  Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-language:PA'><b><u>&nbsp; &nbsp; <?php echo $address; ?></u></b><b><o:p></o:p></b></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:23;height:14.4pt'>
  <td width=306 nowrap valign=bottom style='width:229.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'><o:p></o:p></span></p>
  </td>
  <td width=75 nowrap valign=bottom style='width:56.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=309 nowrap valign=bottom style='width:231.95pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'><o:p></o:p></span></p>
  </td>
  <td width=74 nowrap valign=bottom style='width:55.35pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=325 nowrap valign=bottom style='width:243.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:24;height:14.4pt'>
  <td width=306 nowrap valign=bottom style='width:229.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Phone/Mobile No.</span></b><span lang=EN-US
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-bidi-language:
  PA'><b>&nbsp; &nbsp; <u><?php echo $mob; ?></u></b><b><o:p></o:p></b></span></p>
  </td>
  <td width=75 nowrap valign=bottom style='width:56.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=309 nowrap valign=bottom style='width:231.95pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Phone/Mobile No.</span></b><span lang=EN-US
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-bidi-language:
  PA'><b>&nbsp; &nbsp; <u><?php echo $mob; ?></u></b><b><o:p></o:p></b></span></p>
  </td>
  <td width=74 nowrap valign=bottom style='width:55.35pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=325 nowrap valign=bottom style='width:243.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Phone/Mobile No.</span></b><span lang=EN-US
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-bidi-language:
  PA'><b>&nbsp; &nbsp; <u><?php echo $mob; ?></u></b><b><o:p></o:p></b></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:25;height:14.4pt'>
  <td width=306 nowrap valign=bottom style='width:229.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Depositor's Signature</span></b><span lang=EN-US
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-bidi-language:
  PA'>_____________________<b><o:p></o:p></b></span></p>
  </td>
  <td width=75 nowrap valign=bottom style='width:56.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=309 nowrap valign=bottom style='width:231.95pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Depositor's Signature</span></b><span lang=EN-US
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-bidi-language:
  PA'>______________________<b><o:p></o:p></b></span></p>
  </td>
  <td width=74 nowrap valign=bottom style='width:55.35pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=325 nowrap valign=bottom style='width:243.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Depositor's Signature</span></b><span lang=EN-US
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-bidi-language:
  PA'>______________________<b><o:p></o:p></b></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:26;height:14.4pt'>
  <td width=306 nowrap valign=bottom style='width:229.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Cashier Signature</span></b><span lang=EN-US
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-bidi-language:
  PA'>_________________________<b><o:p></o:p></b></span></p>
  </td>
  <td width=75 nowrap valign=bottom style='width:56.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=309 nowrap valign=bottom style='width:231.95pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Cashier Signature</span></b><span lang=EN-US
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-bidi-language:
  PA'>_________________________<b><o:p></o:p></b></span></p>
  </td>
  <td width=74 nowrap valign=bottom style='width:55.35pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=325 nowrap valign=bottom style='width:243.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid black 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>Cashier Signature</span></b><span lang=EN-US
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-bidi-language:
  PA'>_________________________<b><o:p></o:p></b></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:27;mso-yfti-lastrow:yes;height:15.0pt'>
  <td width=306 nowrap valign=bottom style='width:229.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.5pt;
  border-right:solid black 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>(with bank stamp)<o:p></o:p></span></b></p>
  </td>
  <td width=75 nowrap valign=bottom style='width:56.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'></td>
  <td width=309 nowrap valign=bottom style='width:231.95pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.5pt;
  border-right:solid black 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>(with bank stamp)<o:p></o:p></span></b></p>
  </td>
  <td width=74 nowrap valign=bottom style='width:55.35pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'></td>
  <td width=325 nowrap valign=bottom style='width:243.5pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.5pt;
  border-right:solid black 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  mso-bidi-language:PA'>(with bank stamp)<o:p></o:p></span></b></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span lang=EN-US><o:p>&nbsp; ;</o:p></span></p>

</div>

</body>

</html>

<?php
}
}
?>