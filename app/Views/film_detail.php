<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Film</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4"><?= $detail['title'] ?></h1>
        <div class="row">
            <div class="col-md-4">
                <img src="https://image.tmdb.org/t/p/w500<?= $detail['poster_path'] ?>" class="img-fluid" alt="<?= $detail['title'] ?>">
            </div>
            <div class="col-md-8">
                <ul class="list-group">
                    <li class="list-group-item"><strong>Release Date:</strong> <?= $detail['release_date'] ?></li>
                    <li class="list-group-item"><strong>Genre:</strong>
                        <?php foreach ($detail['genres'] as $genre) : ?>
                            <?= $genre['name'] ?>
                        <?php endforeach; ?>
                    </li>
                    <li class="list-group-item"><strong>Overview:</strong> <?= $detail['overview'] ?></li>
                    <li class="list-group-item"><strong>Rating:</strong> <?= $detail['vote_average'] ?>/10</li>
                    <li class="list-group-item"><strong>Cast:</strong>
                        <ul>
                            <?php foreach ($detail['credits']['cast'] as $cast) : ?>
                                <li><a href="<?= base_url('film/actor/' . $cast['id']) ?>"><?= $cast['name'] ?> as <?= $cast['character'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                </ul>
                <a href="<?= base_url() ?>" class="btn btn-primary mt-3">Kembali</a>
            </div>
        </div>
    </div>
</body>
</html>
