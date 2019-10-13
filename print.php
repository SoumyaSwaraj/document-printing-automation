<?php
if(isset($_POST['rank'])){
$rank=$_POST['rank'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Printing...</title>
</head>
<body onload="printDocs()">
<center><h1>Printing...</h1></center>
<input type="text" id="txtUrl" value="https://musicmate.xyz/docs/checklist.php?rank=<?php echo $rank; ?>; https://musicmate.xyz/docs/undertaking.php?rank=<?php echo $rank; ?>; https://musicmate.xyz/docs/performa.php?rank=<?php echo $rank; ?>;" style="display:none;">
<script type="text/javascript">
	function printDocs() {
            var urls = document.getElementById('txtUrl').value;
            for (var i = 0; i < urls.split(';').length; i++) {
                window.open(urls.split(';')[i], '_blank');
            }
        }
</script>
</body>
</html>

<?php
}else{
	echo "Error. Did Not Recieved the rank! contact - Soumya Swaraj";
}
?>