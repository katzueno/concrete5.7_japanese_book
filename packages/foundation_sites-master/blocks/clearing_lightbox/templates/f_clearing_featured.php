<?php defined('C5_EXECUTE') or die('Access Denied.'); ?>

<ul class="clearing-thumbs clearing-feature" data-clearing>  

<?php
foreach($files as $f) {
    $fv = $f->getApprovedVersion();

    $filePath = $fv->getRelativePath();
    
    $thumbType = $controller->getThumbnailType('clearing_lightbox');
    $thumbPath = $fv->getThumbnailURL($thumbType);
    if(!$thumbPath){
        $fv->rescanThumbnails();
    }

    if($fv->getAttribute('is_featured')) {
        echo "<li class='clearing-featured-img'>";
    } else {
        echo "<li>";
    }
    echo "<a class=\"th\" href=\"$filePath\">";
    echo "<img src=\"$thumbPath\">";
    echo "</a>";
    echo "</li>\n";
}
?>

</ul>