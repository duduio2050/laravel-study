<?php include __Dir__ . '/layout/head.php'; ?>

<div class="album py-5 bg-light">
<section class="py-5 text-center container">
    <div class="row py-lg-5" style="justify-content: center">
        <div class="col-md-8">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="300" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0"><?= $Album[1] ?></h3>
                    <div class="mb-1 text-muted"><?= $Album[0]?></div>
                    <p class="card-text mb-auto"><?= $Album[2] ?></p>
                    <a href="/Album/list">Continue to reading</a>
                    or
                    <a href="/Album/delete/<?= $Album[3] ?>">Delete</a>
                </div>
            </div>

        </div>
    </div>
</section>
</div>
<?php include __Dir__ . '/layout/footer.php'; ?>
