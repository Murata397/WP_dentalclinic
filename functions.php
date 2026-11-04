<?php
// アイキャッチ画像を使えるようにする
add_theme_support('post-thumbnails');

// スタッフの声のカテゴリーページは古い順（公開日が早い順）に並べる
function dentalclinic_staff_voice_order($query) {
  // 管理画面とサブループは対象外
  if (is_admin() || !$query->is_main_query()) {
    return;
  }
  if ($query->is_category('staff-voice')) {
    $query->set('order', 'ASC');
  }
}
add_action('pre_get_posts', 'dentalclinic_staff_voice_order');
add_filter('wpcf7_autop_or_not', '__return_false');
