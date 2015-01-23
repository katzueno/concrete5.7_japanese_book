<?php  defined('C5_EXECUTE') or die('Access Denied.');
$navItems = $controller->getNavItems();
?>

<ul class="breadcrumbs hide-for-small-only">

<?php
for ($i = 0; $i < count($navItems); $i++) {
	$ni = $navItems[$i];
	
	if ($ni->isCurrent) {
        echo '<li class="current"><a href="' . $ni->url . '" target="' . $ni->target . '">' . $ni->name . '</a></li>';
	} else {
		echo '<li><a href="' . $ni->url . '" target="' . $ni->target . '">' . $ni->name . '</a></li>';
	}
}
?>

</ul>
