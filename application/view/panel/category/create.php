<?php $this->include("panel.layouts.header"); ?>


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
