<?php require 'config.php';
$stmt = $pdo->query("SELECT * FROM properties ORDER BY created_at DESC");
$properties = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Properties for Sale | Obakeng Matjeke</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>body{font-family: 'Segoe UI', sans-serif;}</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"><div class="container"><a class="navbar-brand" href="index.php">Obakeng Matjeke</a><div class="collapse navbar-collapse"><ul class="navbar-nav ms-auto"><li class="nav-item"><a class="nav-link" href="index.php">Home</a></li><li class="nav-item"><a class="nav-link" href="properties.php">Properties</a></li><li class="nav-item"><a class="nav-link" href="index.php#contact">Contact</a></li></ul></div></div></nav>
    <div class="container my-5">
        <h1 class="text-center mb-4">Properties for Sale</h1>
        <div class="row">
            <?php if(count($properties) > 0): ?>
                <?php foreach($properties as $prop): ?>
                <div class="col-md-4">
                    <div class="card property-card mb-4 shadow-sm">
                        <img src="<?php echo $prop['image_url'] ?: 'https://via.placeholder.com/300x200?text=Property'; ?>" class="card-img-top" height="200" style="object-fit:cover;">
                        <div class="card-body">
                            <span class="badge <?php echo $prop['type'] == 'commercial' ? 'badge-commercial' : 'badge-residential'; ?> mb-2"><?php echo ucfirst($prop['type']); ?></span>
                            <h5 class="card-title"><?php echo htmlspecialchars($prop['title']); ?></h5>
                            <p class="card-text"><strong>Price:</strong> <?php echo htmlspecialchars($prop['price']); ?></p>
                            <p class="card-text"><strong>Location:</strong> <?php echo htmlspecialchars($prop['location']); ?></p>
                            <a href="property-detail.php?id=<?php echo $prop['id']; ?>" class="btn btn-outline-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-center">No properties listed yet. Check back soon!</p>
            <?php endif; ?>
        </div>
    </div>
    <footer class="bg-dark text-white text-center py-3"><small>&copy; <?php echo date('Y'); ?> Obakeng Matjeke – Sales Only</small></footer>
</body>
</html>