<div class="tags u-pl20 u-pt15">
  <?
  $updates_tags = $pages->find('updates')->children()->visible()->pluck('tags',',');
  $updates_tags_ordered = array_count_values($updates_tags);
  arsort($updates_tags_ordered);
  ?>
  <? if (param('tag')) :?>
    <span class="tag"><?= html(param('tag')) ?><a href="<?= $site->language()->url() ?>" class="u-ml5"><i class="ion ion-close-round"></i></a></span>
  <? endif ?>
  <? foreach($updates_tags_ordered as $tag => $amount): ?>
    <? if (param('tag') != $tag) :?>
      <a href="<?= $site->language()->url() . '/tag:' . $tag ?>" class="tag<?= e(!$active, ' tag--inactive') ?>" data-amount="<?= $amount ?>"><?= html($tag) ?></a>
    <? endif ?>
  <? endforeach ?>
</div>
