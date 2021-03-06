<?php
/**
* @file
* Template file for node search results.
*/
?>
<article class="node-search-result row" xmlns="http://www.w3.org/1999/html">
  <div class="col-md-2 col-lg-1 col-xs-2 icon-container">
    <?php
    print drupal_render($result_icon)
    ?>
  </div>
  <div class="col-md-10 col-lg-11 col-xs-10 search-result search-result-<?php print $type ?>">
    <h2 class="node-title"><a href="/<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
    <?php if(!empty($group_list)): ?>
      <div class="group-membership"><?php print $group_list ?></div>
    <?php endif; ?>
    <?php print render($content['field_topic']); ?>
    <ul class="dataset-list"><?php print $dataset_list ?></ul>
    <?php if(!empty($body)): ?>
      <div class="node-description"><?php print text_summary($body, 'plain_text', 250) ?></div>
    <?php endif; ?>
    <?php print render($content['resources']); ?>
  </div>
</article>
