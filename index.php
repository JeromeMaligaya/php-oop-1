<?php
require_once __DIR__ . ("/classes/Movie.php");

$titanic = new Movie("Titanic", "Drama", "English", 9, 1997);
$oppenheimer = new Movie("Oppenheimer", "historical drama", "English", 8, 2023);
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Melvin Jerome Luna Maligaya">
    <title>php-oop-1</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="fw-bolder text-center py-3">php-oop-1</h1>
                </div>
                <div class="col-12">
                    <main>
                        <p>
                            <?= $titanic->getInfoMovie() ?>
                        </p>
                        <p>
                            <?= $oppenheimer->getInfoMovie() ?>
                        </p>
                    </main>
                </div>
            </div>
        </div>
    </main>

    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>