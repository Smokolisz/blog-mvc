<div class="container py-5">

    <h1>Edytuj #<?= $data['category']['id'] ?></h1>

    <form method="POST" action="/kategorie/update?id=<?= $data['category']['id'] ?>">
        
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Nazwa</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="<?= $data['category']['name'] ?>">
            </div>
        </div>

        <div class="pt-4 text-end">
            <button type="submit" class="btn btn-primary px-4">Zapisz</button>
        </div>
    </form>


</div>