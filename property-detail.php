<?php require 'config.php';
if(!isset($_GET['id'])) die('Property not found');
$stmt = $pdo->prepare("SELECT * FROM properties WHERE id = ?");
$stmt->execute([$_GET['id']]);
$prop = $stmt->fetch();
if(!$prop) die('Property not found');
?>
<!DOCTYPE html>
<html>
<head><title><?php echo htmlspecialchars($prop['title']); ?></title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body>
    <div class="container my-5">
        <a href="properties.php" class="btn btn-secondary mb-3">&larr; Back to Properties</a>
        <div class="row">
            <div class="col-md-6"><img src="<?php echo $prop['image_url'] ?: 'https://via.placeholder.com/600x400'; ?>" class="img-fluid rounded"></div>
            <div class="col-md-6"><h1><?php echo htmlspecialchars($prop['title']); ?></h1><span class="badge bg-primary mb-2"><?php echo ucfirst($prop['type']); ?></span><p><strong>Price:</strong> <?php echo htmlspecialchars($prop['price']); ?></p><p><strong>Location:</strong> <?php echo htmlspecialchars($prop['location']); ?></p><p><?php echo nl2br(htmlspecialchars($prop['description'])); ?></p><hr><h5>Contact Obakeng</h5><p>Phone: <?php echo SITE_PHONE; ?><br>Email: <?php echo SITE_EMAIL; ?></p></div>
        </div>
    </div>
</body>
</html>