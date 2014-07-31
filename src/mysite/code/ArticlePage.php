<?php

class ArticlePage extends Page {
        private static $db = array(
        'Date' => 'Date',
        'Author' => 'Text'
    );
}

class ArticlePage_Controller extends Page_Controller {
}