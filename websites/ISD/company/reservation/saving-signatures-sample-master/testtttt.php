<?php include 'session.php';?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Boat Sale Signature</title>
</head>
<body>
<div class="container">

<?php 
$bsid = $_GET["bsid"];
$idcustomers = $_GET["idcustomers"];?>
 
<div id="signatureparent">
<div id="signature"></div>
<button type="button" onclick="$('#signature').jSignature('clear')">Clear</button>
<button type="button" id="btnSave">Save</button>
</div>
<input type="hidden" id="hiddenSigData" name="hiddenSigData" />
<div id="scrollgrabber"></div>
<script src="js/jSignature.min.js"></script>
<script src="js/jSignature.CompressorBase30.js"></script>
<script src="js/jSignature.CompressorSVG.js"></script>
<script src="js/jSignature.UndoButton.js"></script> 
<script>
    $(document).ready(function() {
        var $sigdiv = $("#signature").jSignature({'UndoButton':false});
        $('#btnSave').click(function(){
            var sigData = $('#signature').jSignature('getData','base30');
            $('#hiddenSigData').val(sigData);
			document.FORM1.sigImageData.value = sigData;
        });
    })
</script>
	
    <form action="" name=FORM1 method="POST">
		<p>
			<INPUT TYPE=HIDDEN NAME="sigImageData">
			<INPUT TYPE=HIDDEN NAME="bsid" value="<?php echo $bsid;?>">
			<INPUT TYPE=HIDDEN NAME="idcustomers" value="<?php echo $idcustomers;?>">
		</p>
	</form>

	<br />
	<?php if (isset($_POST['btnSubmit'])) {
	$sig = $_POST["sigImageData"];
	$bsid = $_POST["bsid"];
    $idcustomers = $_POST["idcustomers"];
	echo $sig;
	//$query = "UPDATE boat_sale SET bs_sig = '" . $sig . "' WHERE bs_id = " . $bsid . "";
	//$results = mysqli_query($conn, $query); 
	//header("Location: boat_sale_print.php?idcustomers=" . $idcustomers . "&bsid=" . $bsid . "");
	}?>
	
</div>
</body>
</html>

