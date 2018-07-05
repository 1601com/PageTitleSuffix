<?php
namespace Contao;
class PageTitleSuffixClass extends \Backend
{
    static public function generatePageTitle ($objPage,$objLayout,$objPageRegular)
    {
        if($objPage->pageTitleSuffix){
            $objLayout->titleTag = '{{page::pageTitle}}';
        }
    }
}