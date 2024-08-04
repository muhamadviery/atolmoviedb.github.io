<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Aktor</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4"><?= $actor['name'] ?></h1>
        <div class="row">
            <div class="col-md-4">
                <img src="https://image.tmdb.org/t/p/w500<?= $actor['profile_path'] ?>" class="img-fluid" alt="<?= $actor['name'] ?>">
            </div>
            <div class="col-md-8">
                <ul class="list-group">
                    <li class="list-group-item"><strong>Birthday:</strong> <?= $actor['birthday'] ?></li>
                    <li class="list-group-item"><strong>Place of Birth:</strong> <?= $actor['place_of_birth'] ?></li>
                    <li class="list-group-item"><strong>Biography:</strong> <?= $actor['biography'] ?></li>
                </ul>
                <a href="<?= base_url() ?>" class="btn btn-primary mt-3">Kembali</a>
            </div>
        </div>
    </div>
</body>
</html>
