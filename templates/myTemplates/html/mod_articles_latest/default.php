<?php

/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_latest
 *
 * @copyright   (C) 2006 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

if (!$list) {
    return;
}

?>
<div class="three-blog row row-cols-1 row-cols-md-3 g-4">
<?php foreach ($list as $item) : ?>
<?php
   $itemImg = $item->images;
    $itemImg = json_decode($itemImg,true);
    ?>
    <div class="col">
        <div class="card h-100">
            <a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($item->id, $item->catid, null, null)); ?>">
            <img src="<?php echo $itemImg["image_intro"]; ?>" class="card-img-top" alt="...">
            </a>
            <div class="card-body">
                <div class="card-title">
                    <a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($item->id, $item->catid, null, null)); ?>">
                <h3 class="title"><?php echo $item->title;?></h3></div>
                </a>
                <div class="card-text"><?php
                    $string = strip_tags($item->introtext);
                    if (strlen($string) > 150) {
                        // truncate string
                      echo   $stringCut = substr($string, 0, 160).'...';

                    }else{
                        echo  $string;
                    }
                    ?>
                    </div>
            </div>

            <div class="card-footer">
                <a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($item->id, $item->catid, null, null)); ?>">Read more</a>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>
