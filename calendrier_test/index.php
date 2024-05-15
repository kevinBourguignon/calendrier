<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>
</head>
<body>
<div id="calendar"></div>

    <div class="container">
        <h2>Réservation</h2>
        
        <!-- Formulaire de réservation -->
        <form id="reservation-form">
            <label for="service">Service :</label>
            <select id="service" name="service">
                <option value="Service 1">Service 1</option>
                <option value="Service 2">Service 2</option>
                <!-- Ajoutez d'autres options de service ici  -->
            </select><br>
            <label for="date">Date :</label>
            <input type="date" id="date" name="date" required><br>
            <label for="time">Heure :</label>
            <input type="time" id="time" name="time" required><br>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" required><br>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required><br>
            <input type="hidden" name="raison">
            <button type="submit">Réserver</button>
        </form>
        
        <!-- Affichage des rendez-vous réservés -->
        <div id="reservation-list">
            <h3>Rendez-vous réservés</h3>
            <!-- Les rendez-vous réservés seront affichés ici -->
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
