<div class="panel-display omega-grid omega-12-fourcol-3-3-3-3 <?php if (!empty($css_class)) { print $css_class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="panel-panel first">
    <div class="inside"><?php print $content['left']; ?></div>
  </div>
  <div class="panel-panel">
    <div class="inside"><?php print $content['middle_1']; ?></div>
  </div>
  <div class="panel-panel">
    <div class="inside"><?php print $content['middle_2']; ?></div>
  </div>
  <div class="panel-panel last">
    <div class="inside"><?php print $content['right']; ?></div>
  </div>
</div>
