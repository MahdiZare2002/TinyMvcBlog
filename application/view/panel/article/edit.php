<?php $this->include("panel.layouts.header"); ?>

<section class="container-fluid">
    <section class="row">
        <section class="col-md-2 p-0">
            <section class="sidebar">
                <section class="sidebar-link">
                    <a href="../index.html">panel</a>
                </section>
                <section class="sidebar-link">
                    <a href="index.html">category</a>
                </section>
                <section class="sidebar-link">
                    <a href="../article/index.html">article</a>
                </section>

            </section>
        </section>
        <section class="col-md-10 pt-3">

            <form>
                <section class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="title ...">
                </section>
                <section class="form-group">
                    <label for="cat_id">Category</label>
                    <select class="form-control" id="cat_id">
                        <option value="1">Sport</option>
                        <option value="2">News</option>
                    </select>
                </section>
                <section class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control" id="body" rows="5" placeholder="body ..."></textarea>
                </section>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            <?php $this->include("panel.layouts.footer"); ?>