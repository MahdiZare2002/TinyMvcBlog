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
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="name ...">
                </section>
                <section class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" placeholder="description ...">
                </section>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
            <?php $this->include("panel.layouts.footer"); ?>
