Merci <?= $_POST['user_firstname'];?> <?= $_POST['user_lastname'];?> de nous avoir contacté à propos de <?= $_POST['choix'];?> . <br>

Un de nos conseiller vous contactera soit à l’adresse "<?= $_POST ['email'];?>" ou par téléphone au <?= $_POST['user_phone'];?> dans les plus brefs délais pour traiter votre demande :<br>
<?= $_POST['user_message'];?>

<?php
$errors=[];

if(!array_key_exists('user_firstname', $_POST) || $_POST['user_firstname'] == ''){
    $errors['user_firstname'] = "Vous n'avez pas rempli le champs Prénom";
}
if(!array_key_exists('user_lastname', $_POST) || $_POST['user_lastname'] == ''){
    $errors['user_lastname'] = "Vous n'avez pas rempli le champs Nom";
}
if(!array_key_exists('email', $_POST) || $_POST['email'] == ''){
    $errors['email'] = "Vous n'avez pas rempli le champs email";
}
if(!array_key_exists('user_phone', $_POST) || $_POST['user_phone'] == ''){
    $errors['user_phone'] = "Vous n'avez pas rempli le champs téléphone";
}
if(!array_key_exists('user_message', $_POST) || $_POST['user_message'] == ''){
    $errors['user_message'] = "Vous n'avez pas rempli le champs message";
}

if(empty($errors)){
    echo ("on n'est pas bon du tout la!");
}else{
    echo ("Tout est Ok");
}
?>

