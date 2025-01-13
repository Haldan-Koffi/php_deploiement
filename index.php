<?php
// Traitement du formulaire
$message = '';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = htmlspecialchars($_POST['nom'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $messageContact = htmlspecialchars($_POST['message'] ?? '');

    if (!empty($nom) && !empty($email) && !empty($messageContact)) {
        $message = "Merci, $nom ! Votre message a été envoyé.";
    } else {
        $message = "Veuillez remplir tous les champs.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Mon Site</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">À propos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1>Bienvenue sur notre Landing Page</h1>
            <p class="lead">Découvrez nos services incroyables et contactez-nous pour plus d'informations.</p>
            <a href="#services" class="btn btn-light btn-lg">Voir nos services</a>
        </div>
    </header>

    <section id="services" class="py-5">
        <div class="container text-center">
            <h2>Nos Services</h2>
            <p class="lead">Ce que nous offrons</p>
            <div class="row">
                <div class="col-md-4">
                    <h4>Service 1</h4>
                    <p>Description du service 1.</p>
                </div>
                <div class="col-md-4">
                    <h4>Service 2</h4>
                    <p>Description du service 2.</p>
                </div>
                <div class="col-md-4">
                    <h4>Service 3</h4>
                    <p>Description du service 3.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="bg-light py-5">
        <div class="container">
            <h2>À propos de nous</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
        </div>
    </section>

    <section id="contact" class="py-5">
        <div class="container">
            <h2>Contactez-nous</h2>
            <p class="lead">Remplissez le formulaire ci-dessous pour nous envoyer un message.</p>
            <?php if (!empty($message)): ?>
                <div class="alert alert-info"><?php echo $message; ?></div>
            <?php endif; ?>
            <form method="POST" action="#contact">
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; 2025 Mon Site. Tous droits réservés.</p>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
