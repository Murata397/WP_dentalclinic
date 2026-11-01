<?php get_header(); ?>

    <!-- main -->
    <main>
      <article>
        <!-- ページタイトル -->
        <section class="page-header">
          <div class="inner">
            <h1 class="page-title"><span>STAFF</span>スタッフ紹介</h1>
          </div>
        </section>

        <section class="staff-container section">
          <div class="inner">
            <?php
              if (have_posts()):
                while (have_posts()):
                  the_post();

                  // タイトルを全角スペースで「名前」と「ふりがな」に分ける
                  $title = explode('　', get_the_title(), 2);
                  $name  = $title[0];
                  $kana  = isset($title[1]) ? $title[1] : '';

                  // ACFの「スタッフ情報」フィールドの値を取得
                  $role        = get_field('staff-role');
                  $skill_label = get_field('staff-skill-label');
                  $skill       = get_field('staff-skill');
                  $hobby       = get_field('staff-hobby');
            ?>
            <div class="staff-item">
              <!-- 写真（アイキャッチ画像） -->
              <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('large', array('alt' => $role . ' ' . $name)); ?>
              <?php endif; ?>
              <div class="staff-text">
                <!-- 役職 -->
                <p class="staff-role"><?php echo esc_html($role); ?></p>
                <!-- 名前・ふりがな -->
                <h2 class="staff-name"><?php echo esc_html($name); ?><span><?php echo esc_html($kana); ?></span></h2>
                <!-- 本文（コメント） -->
                <?php the_content(); ?>
                <!-- プロフィール（得意分野・趣味） -->
                <dl class="staff-profile">
                  <dt><?php echo esc_html($skill_label); ?></dt>
                  <dd><?php echo esc_html($skill); ?></dd>
                  <dt>趣味</dt>
                  <dd><?php echo esc_html($hobby); ?></dd>
                </dl>
              </div>
            </div>
            <?php
                endwhile;
              endif;
            ?>
          </div>
        </section>
      </article>
    </main>

<?php get_footer(); ?>
