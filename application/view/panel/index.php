<?php $this->include("panel.layouts.header"); ?>

<section class="container-fluid">
    <section class="row">
        <section class="col-md-2 p-0">
            <section class="sidebar">
                <section class="sidebar-link">
                    <a href="index.html">panel</a>
                </section>
                <section class="sidebar-link">
                    <a href="category/index.html">category</a>
                </section>
                <section class="sidebar-link">
                    <a href="article/index.html">article</a>
                </section>

            </section>
        </section>
        <section class="col-md-10 pb-3">

            <section style="min-height: 80vh;" class="d-flex justify-content-center align-items-center">
                <section>
                    <h1>MVC Tutorial</h1>
                    <ul class="mt-2 li">
                        <li>
                            <h3>Model</h3>
                        </li>
                        <li>
                            <h3>View</h3>
                        </li>
                        <li>
                            <h3>Controller</h3>
                        </li>
                    </ul>
                </section>
            </section>
            <?php $this->include("panel.layouts.footer"); ?>