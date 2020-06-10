<?php
class RatingsHelper extends \Prefab {
  static public function render($node) {
	  $rating = $node['@attrib'];
	  $rating['id'] = \Template::instance()->token($rating['id']);
	  $html = \Template::instance()->build('<div class="text-center"><input id="'.$rating['type'].'_rating_<?php echo '.$rating['id'].';?>" value="<?php echo $rating['value'];?>" class="ratings" /></div>');
    return $html;
  }
  
}
