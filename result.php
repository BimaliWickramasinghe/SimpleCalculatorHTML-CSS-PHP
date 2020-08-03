<?php
    session_start();                // SE/2017/046- B.C.S. Wickramasinghe
?>
<!DOCTYPE html>
<head>
<style>
    .result {
        margin-left: 525px;
        margin-top: 20px;
		background-color: #800000;
		text-align:center;
		width:300px;
		height:200px;
		font-size:32px;
		color: white;
    }
    #setResult{
		padding-top: 80px;
    }
</style>

</head>
<body>
	<br/><br/>
	<h1 align="center">Result of the calculation is,</h1>
    <div class="result">
        <p id="setResult"></p>
    </div>
    <?php
    $Result = $_REQUEST['res'];
    ?>
    <Script>
        var result = <?php echo $Result  ?>;
        document.getElementById("setResult").innerHTML = result;
    </Script>
</body>
</html>