<?php

class VideoPage extends Page {
    private static $icon = "cms/images/treeicons/news-file.gif";
    private static $db = array(
        'VideoId' => 'Text'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', new TextField('VideoId', 'Youtube ID'), 'Content');

        return $fields;
    }
}

class VideoPage_Controller extends Page_Controller {
}