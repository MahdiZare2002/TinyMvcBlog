<?php $this->include("app.layouts.header", ['categories' => $categories]); ?>
    <section class="container my-5">
        <!-- Example row of columns -->
        <section class="row">
            <section class="col-md-12">
                <h1><?php echo  $article['title'] ?></h1>
                <h5 class="d-flex justify-content-between align-items-center">
                    <a href="<?php echo $this->url('home/category/'.$article['cat_id']); ?>"><?php echo  $article['category'] ?></a>
                    <span class="date-time"><?php echo  $article['created_at'] ?></span>
                </h5>
                <article class="bg-article p-3">
                    <p>
                    <?php echo  $article['body'] ?>
                    </p>

                </article>
            </section>
        </section>
    </section>
    <?php $this->include("app.layouts.footer"); ?>
