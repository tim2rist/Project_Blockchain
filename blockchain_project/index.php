<?php
require 'db.php';

$query = $pdo->query('SELECT * FROM perspectives');
$perspectives = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perspectives on Blockchain</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h1 class="mb-4">Perspectives on Blockchain Technology</h1>
        <div class="row">
            <?php foreach ($perspectives as $perspective): ?>
                <div class="col-md-6 mb-3">
                    <div class="p-3 bg-light border rounded">
                        <h3><?php echo htmlspecialchars($perspective['title']); ?></h3>
                        <p><?php echo htmlspecialchars($perspective['description']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
