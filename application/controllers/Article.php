<?php

namespace Application\Controllers;

use Application\Model\Article as ArticleModel;
use Application\Model\Category;

class Article extends Controller
{
    public function index()
    {
        $article = new ArticleModel();
        $articles = $article->all();
        return $this->view('panel.article.index', compact('articles'));
    }

    public function create()
    {
        $category = new Category();
        $categories = $category->all();
        return $this->view('panel.article.create', compact('categories'));
    }

    public function store()
    {
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update($id)
    {
    }

    public function destroy($id)
    {
    }
}
