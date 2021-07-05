<div class="container py-5">

    <h1 class="pb-3">Dodaj kategorię</h1>

    <form method="POST" action="/kategorie/zapisz">
        
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Nazwa</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name">
            </div>
        </div>

        <div class="pt-4 text-end">
            <button type="submit" class="btn btn-primary px-4">Dodaj</button>
        </div>
    </form>


</div>