<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website ni Peruda</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css"> <!-- Link to the new external CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php include 'inc/header.php'; ?>
    <?php include 'inc/nav.php'; ?>

    <div class="container mt-4 content">
        <div class="row">
            <div class="col-md-8">
                <h1 class="white-text">Welcome to Zipperuda's Website</h1>
                <div class="gallery">
                    <!-- First section: Your image gallery -->
                    <div class="main-image-container">
                        <img src="sl1.jpg" class="main-image" alt="Main Cat Image" id="main-image">
                    </div>
                    <div class="thumbnails">
                        <img src="sl1.jpg" alt="Thumbnail 1" class="thumbnail" data-src="sl1.jpg">
                        <img src="sl2.jpg" alt="Thumbnail 2" class="thumbnail" data-src="sl2.jpg">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-column info-column-right">
                    <h2>HBO's House of the Dragon</h2>
                    <p>House of the Dragon is an American fantasy drama television series...</p>
                </div>
            </div>
        </div>
    </div>

    <?php include 'inc/footer.php'; ?>

    <script>
        // JavaScript to handle the gallery thumbnail clicks
        document.querySelectorAll('.thumbnail').forEach(img => {
            img.addEventListener('click', function() {
                const mainImage = document.getElementById('main-image');
                const newSrc = this.getAttribute('data-src');
                mainImage.src = newSrc;
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


