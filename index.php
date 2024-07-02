<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to: România</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'includes/header.php'; ?>

<main>
    <section class="institutions">
        <?php
        include 'includes/config.php';

        $conn = get_db_connection($config);

        $sql = "SELECT id, nume_institutie, src_logo, descriere FROM institutii";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="institution">';
                echo '<img src="images/' . $row["src_logo"] . '" alt="' . $row["nume_institutie"] . '">';
                echo '<p>' . $row["nume_institutie"] . '</p>';
                echo '<a href="institutie.php?id=' . $row["id"] . '">Află mai multe</a>';
                echo '</div>';
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
</body>
</html>
