<?php

class DiscussionCssClassPlugin extends Gdn_Plugin {

    public function base_beforeDiscussionName_handler($sender) {
        $args = &$sender->EventArguments;
        $category = CategoryModel::categories($args['Discussion']->CategoryID);
        if ($category) {
            $args['CssClass'] .= ' '.$category['CssClass'].' ';
        }
    }

}
