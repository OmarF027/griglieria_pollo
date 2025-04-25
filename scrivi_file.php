<?php
// Variabili di errore e conferma
$errore = "";
$successo = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanificazione dei dati per evitare vulnerabilità XSS
    $nome = htmlspecialchars(trim($_POST['nome']));
    $email = htmlspecialchars(trim($_POST['mail']));
    $messaggio = htmlspecialchars(trim($_POST['messaggio']));

    // Validazione dei dati
    if (empty($nome) || empty($email) || empty($messaggio)) {
        $errore = "Tutti i campi sono obbligatori!";
    } else {
        // Scrivere i dati nel file solo se tutto è valido
        $file = fopen("messaggi.txt", "a");
        if ($file) {
            $data = date('Y-m-d H:i:s');
            fwrite($file, "Nome: $nome\nEmail: $email\nMessaggio: $messaggio\nData: $data\n\n");
            fclose($file);
            $successo = "Il tuo messaggio è stato inviato con successo!";
        } else {
            $errore = "Errore nel salvataggio del messaggio. Riprova più tardi.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatti | PolloTribe</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php"><img src="img/logo3.jpg" alt="Logo PolloTribe"></a>
        </div>
        <div class="toggle"></div>
        <nav class="navigation">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="menu.php">Menù</a></li>
                <li><a href="ordina.php">Ordina</a></li>
                <li><a href="contatti.php">Contatti</a></li>
            </ul>
        </nav>
    </header>

    <!-- Sezione di messaggio di conferma invio -->
    <section class="contact-section">
        <h2 class="section-title">Grazie per averci contattato!</h2>

        <!-- Visualizza errore se presente -->
        <?php if ($errore): ?>
            <div class="alert alert-danger"><?php echo $errore; ?></div>
        <?php endif; ?>

        <!-- Visualizza conferma se presente -->
        <?php if ($successo): ?>
            <div class="alert alert-success"><?php echo $successo; ?></div>
        <?php endif; ?>
    </section>

    <footer>
        <div class="footer-content">
            <div class="footer-info">
                <h3>Dove siamo</h3>
                <p>58022 Follonica (GR)</p>
            </div>
            <div class="footer-info">
                <h3>Orari</h3>
                <p>Mar-Dom: 12:00 - 22:30<br>Lunedì: Chiuso</p>
            </div>
            <div class="footer-info">
                <h3>Social</h3>
                <div class="social-links">
                    <a href="#">Facebook</a><br>
                    <a href="#">Instagram</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2025 PolloTribe - Tutti i diritti riservati</p>
            <p>
                Tel: <a href="tel:+39566234567">+39 0566 234 567</a> | 
                Email: <a href="mailto:info@pollotribe.com">info@pollotribe.com</a>
            </p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
