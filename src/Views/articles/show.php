<div class="container py-5">

    <article>
    
        <h1><?= $data['article']['title'] ?></h1>

        <div class="d-flex flex-wrap">
            <p class="text-muted me-3"><?= $data['article']['created_at'] ?></p>
            |
            <p class="text-muted ms-3 me-3">Autor: <?= $data['author']['username'] ?></p>
            |
            <p class="text-muted ms-3">Kategoria: <?= $data['category']['name'] ?></p>
        </div>

        <p><?= $data['article']['text'] ?></p>

    </article>

</div>