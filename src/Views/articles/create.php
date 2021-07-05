<div class="container py-5">

    <h1 class="pb-3">Napisz artykuł</h1>

    <form method="POST" action="/artykuly/zapisz">
    
        <div class="mb-3 row">
            <label for="title" class="col-sm-2 col-form-label">Tytuł</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="text" class="col-sm-2 col-form-label">Treść</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="text" name="text"></textarea>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="category" class="col-sm-2 col-form-label">Kategoria</label>
            <div class="col-sm-10">
                <select name="category" class="form-control">
                    <?php
                    foreach($data['categories'] as $category) {
                        echo '<option value="'.$category['id'].'">'.$category['name'].'</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="user" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
                <select name="status" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
        </div>
        <div class="pt-4 text-end">
            <button type="submit" class="btn btn-primary px-4">Zapisz</button>
        </div>
    </form>


</div>