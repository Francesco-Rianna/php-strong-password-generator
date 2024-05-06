<!-- Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale -->
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header> 
        <h1 class="text-center p-2">GENERA LA TUA PASSWORD</h1>
    </header>
  <div class="container">
      <form>
          <div class="mb-3">
              <label for="password" class="form-label">La tua password</label>
              <input type="number" class="form-control" id="password" name="password" >
          </div>
         
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>


</body>
</html>