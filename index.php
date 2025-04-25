<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PolloTribe</title>
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

    <section class="hero">
        <img src="img/grill.jpg" class="hero-img" alt="PolloTribe">
        <div class="hero-content">
            <h1 class="animate-fade-up">Il vero gusto del<br>pollo alla brace</h1>
            <p class="animate-fade-up delay-1">Carne bianca di qualità, cotta al momento per un sapore autentico. <br>In stile PolloTribe, dal 1985.</p>
            <a href="menu.php" class="btn animate-fade-up delay-2">Scopri il menù</a>
        </div>
    </section>

    <section class="specialita">
        <h2>Le nostre specialità</h2>
        <div class="grid">
            <div class="item">
                <a href="img/pollo.jpg" target="_blank">
                    <img src="img/pollo.jpg" alt="Pollo alla brace">
                </a>
                <h3>Pollo alla brace</h3>
                <p>Cotto lentamente sulla brace per un gusto intenso e irresistibile</p>
            </div>
            <div class="item">
                <a href="img/pollopiccante.jpg" target="_blank">
                    <img src="img/pollopiccante.jpg" alt="Pollo alla brace piccante">
                </a>
                <h3>Pollo alla brace piccante</h3>
                <p>Un mix travolgente di spezie, perfetto per chi ama il piccante</p>
            </div>
            <div class="item">
                <a href="img/mixed_grill.jpg" target="_blank">
                    <img src="img/mixed_grill.jpg" alt="Grigliata mista">
                </a>
                <h3>Grigliata mista</h3>
                <p>Un mix succulento di carni selezionate, grigliate alla perfezione</p>
            </div>
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