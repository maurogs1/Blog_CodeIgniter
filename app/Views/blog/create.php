<div class="container">
    <h1 class="text-center">Agrega un nuevo post</h1>
    <?php if($_POST): ?>
        <h3>ERROR</h3>
    <?= \Config\Services::validation()->listErrors();    ?>
    <?php endif; ?>
    <form action="/blog/create" metohd="post">
        <div class="form-group">
            <label for="title"><strong>Título:</strong></label>
            <input type="text" class="form-control" name="title" id="title" value="">
        </div>
        <div class="form-group">
            <label for="body"><strong> Descripción:</strong></label>
            <textarea class="form-control" name="body"  id="body" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Crear</button>
        </div>
    </form>
</div>
