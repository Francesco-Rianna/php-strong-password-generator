<?php
// Funzione per generare una password casuale
function generate_random_password($length) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!"#$%&\'()*+,-./:;<=>?@[\]^_`{|}~';
    $chars_length = strlen($chars);
    $password = '';
 // Genera la password casuale
    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[rand(0, $chars_length - 1)];
    }
    return $password;
}

// Verifica se il form è stato inviato
if(isset($_GET['password'])) {
    $password_length = $_GET['password'];
    $generated_password = generate_random_password($password_length);
}
?>