<?php
/*
  Example: Using pagesByDate with results grouped by month
*/
  $posts = pagesByDate($pages, array('group'=>'month'));
?>

<?php if (!$posts): ?>

<p>Sorry, nothing to show.</p>

<?php else: ?>

<?php foreach($posts as $year => $months): ?>

<h2><?php echo $year ?></h2>
<?php foreach($months as $month => $uris): ?>

<h3><?php echo date("F", mktime(0, 0, 0, $month)) ?></h3>
<ul>
<?php foreach($uris as $uri): ?>
<?php $post = $pages->find($uri); ?>
  <li><a href="<?php echo $post->url() ?>"><?php echo $post->title() ?></a></li>
<?php endforeach; ?>
</ul>
<?php endforeach; ?>
<?php endforeach; ?>

<?php endif; ?>
