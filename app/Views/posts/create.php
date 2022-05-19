<div class="container">
    <h1>Create New Posts</h1>
    <form action="<?= base_url() . '/posts/create' ?>" method="post">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="">
        </div>
        <div class="form-group">
            <label for="text">Title</label>
            <textarea class="form-control" name="text" id="text" cols="30" rows="10"></textarea>
        </div>
        <div class="row">
            <div class="col-12 col-sm-4">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</div>