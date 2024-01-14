<?php $this->include("panel.layouts.header"); ?>

<form action="<?php $this->url('article/update/'.$article['id']); ?>" method="post">
    <section class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title" value="<?php echo $article['title']; ?>" placeholder="title ...">
    </section>
    <section class="form-group">
        <label for="cat_id">Category</label>
        <select class="form-control" id="cat_id" name="cat_id">
        <?php foreach ($categories as $category) { ?>
            <option value="<?php echo $category['id'] ?>" <?php if($article['cat_id'] == $category['id']) echo 'selected'; ?>><?php echo $category['name']; ?></option>
            <?php } ?>
        </select>
    </section>
    <section class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" id="body" name="body" rows="5"><?php echo $article['body']; ?></textarea>
    </section>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

<?php $this->include("panel.layouts.footer"); ?>