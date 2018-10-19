<?php


class ArticlePage extends Page {

    public function summary() {
        foreach ($this->contentblocks()->toStructure() as $section) {
            if ($section->_fieldset() == 'text') {
                $summarytext = $section->text();
                break;
            }
        }

        return $summarytext;
    }

}