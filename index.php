<!DOCTYPE html>
<html>
    <head>
        <title>TEST</title>
<style>
	body{
	background:#aab3fc;
	}

</style>
    </head>
    <body>
      <div id="php">
          <form method="post">
             <center>Enter Message: <input type="file" id="fileUpload" name="image" ><br><br>
             <input type='submit' value="click" name='button'>
 <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
function getFilePath(){
	$('input [type=file]').change(function () {
		var filePath=$('#fileUpload').val();
	});
}
</script>
 </center>
          </form>
      </div>

    </body>
</html>
<?php
$d = $_POST['image'];
    $exe = escapeshellcmd("python main.py -i $d");
    $output = shell_exec($exe);
    echo $output;
    echo "<br>";
    
?>