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

    <section class="contact-section">
        <!-- Titolo esterno al form, colorato di rosso -->
        <h2 class="section-title">Contattaci</h2>
        <div class="contact-container">
            <form action="scrivi_file.php" method="post">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-Mail</label>
                    <input type="email" class="form-control" name="mail" id="email" required>
                </div>
                <div class="mb-4">
                    <label for="messaggio" class="form-label">Messaggio</label>
                    <textarea class="form-control" name="messaggio" id="messaggio" rows="5" required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="order-button">Invia</button>
                    <button type="reset" class="order-button">Cancella</button>
                </div>
            </form>
        </div>
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

