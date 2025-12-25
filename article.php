<?php

require_once 'article_text.inc.php';

$article = getArticle();
$page['title'] = $article['title'];

include 'article.tpl.php';
