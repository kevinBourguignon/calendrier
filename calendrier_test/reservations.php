<?php
// Connexion à la base de données (à adapter selon votre configuration)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "calendrier_test";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Vérifier si le formulaire de réservation a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $service = $_POST['service'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Insérer les données dans la base de données
    $sql = "INSERT INTO reservations (service, date, time, name, email)
            VALUES ('$service', '$date', '$time', '$name', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Réservation enregistrée avec succès";
    } else {
        echo "Erreur lors de l'enregistrement de la réservation : " . $conn->error;
    }

    $sql = "SELECT id FROM reservations";
    $result = $conn->query($sql);
}


// Afficher les rendez-vous réservés
$sql = "SELECT * FROM reservations";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h3>Rendez-vous réservés</h3>";
    while($row = $result->fetch_assoc()) {
        echo "Service: " . $row["service"]. " - Date: " . $row["date"]. " " . $row["time"]. " - Nom: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "Aucun rendez-vous réservé";
}

// Fermer la connexion à la base de données
$conn->close();

?>
