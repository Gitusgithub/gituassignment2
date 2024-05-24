<?php
//Indexed or numeric array
$colors =["Black","Green","Yellow"];

print_r($colors);

?>
<br>
<?php
$user = array("Alex","Peter","Ann");
print $user[2];

?>

//Preserve

<pre>
    <?php print_r($user);?>
</pre>

//Associated arrays

<?php
$user_data = [
    "Fullname" =>"Alex Okama"
    "email" =>"AOKama@yahoo.com"
    "phone" =>"+2548458965"
];
print $user_data["email"];
?>

