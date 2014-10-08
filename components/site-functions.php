<?php function say_hello ($argument) {
 return "Tere $argument";
}
?> 

<?php function redirect_to($address) {
	return header("Location: " . $address);
}
?>