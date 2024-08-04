<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Film</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Daftar Film</h1>
        <form method="get" action="<?= base_url('film/search') ?>">
            <div class="form-group">
                <input type="text" name="query" class="form-control" placeholder="Cari film...">
            </div>
            <button type="submit" class="btn btn-primary">Cari</button>
        </form>
        <div class="row mt-4">
            <?php if (isset($results)) : ?>
                <?php foreach ($results as $film) : ?>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="https://image.tmdb.org/t/p/w500<?= $film['poster_path'] ?>" class="card-img-top" alt="<?= $film['title'] ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= $film['title'] ?></h5>
                                <a href="<?= base_url('film/detail/' . $film['id']) ?>" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
