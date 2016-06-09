<?php

//////////////////////////////////////////////////////////////
//														    //
//				Encrypt System (Noob friendly)			    //
//				   Made by SkyDZN © 2016                    //
//															//
//////////////////////////////////////////////////////////////
//															//
//    You are allowed to share this <3 Because I am nice.   //
//															//
//////////////////////////////////////////////////////////////
//															//
//  Supported Hashes:                                       //
//   - SHA512                                               //
//   - SHA256                                               //
//   - SHA1                                                 //
//   - SHA384                                               //
//   - MD5                                                  //
//															//
//////////////////////////////////////////////////////////////

?>

<form id="form" method="POST" action="">
<b>Enter the text you want to convert:</b><br><br>
  <select name="hashselect">
    <option name="SHA512">SHA512</option>
    <option name="SHA256">SHA256</option>
    <option name="SHA1">SHA1</option>
    <option name="SHA384">SHA384</option>
    <option name="MD5">MD5</option>
  </select>
  <br><br>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js" type="text/javascript" charset="utf-8">	
</script>
<script type="text/javascript">
$("#input").keypress(function (e) {
    if(e.which == 13 && !e.shiftKey) {        
        $(this).closest("form").submit();
        e.preventDefault();
        return false;
    }
});
</script>


	<textarea id="input" rows="25" cols="150" name="input" placeholder="Enter the text you want to encrypt."></textarea>
	<br><br>
	<input name="submit" type="submit" value="Encrypt">
</form>
<?php
echo $error;
?>
<?php
if(isset($_POST["submit"])) {
	$hash = $_POST["hashselect"];
	$input = $_POST["input"];

	if(empty($input)) {
		$error = "Please fill in this field.";
}
else {
		$encrypted = hash($hash,$_POST["input"]);
		$nietEncrypted = $_POST["input"];
		echo "<b>Entered value: </b>$nietEncrypted <br>";
		echo "<b>$hash Encrypted:</b> $encrypted";
	}

}
?>