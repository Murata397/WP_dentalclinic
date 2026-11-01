<?php get_header(); ?>

    <!-- main -->
    <main>
      <article>
        <!-- ページタイトル -->
        <section class="page-header">
          <div class="inner">
            <h1 class="page-title"><span>NEWS</span>お知らせ</h1>
          </div>
        </section>

        <!-- お知らせ一覧 -->
        <section class="news-container section">
          <div class="inner">
            <?php
              if (have_posts()):
                while (have_posts()):
                  the_post();
            ?>
            <article id="news-<?php the_ID(); ?>" class="news-item">
              <!-- 日付 -->
              <time class="news-date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
              <!-- タイトル -->
              <h2 class="news-title"><?php the_title(); ?></h2>
              <?php
                // 本文のタグを取り除いて文字だけにする
                $text = trim(wp_strip_all_tags(get_the_content()));
                // 最初の「。」の位置を探す（日本語なのでmb_を使う）
                $pos = mb_strpos($text, '。');
                // 「。」があればそこまで、なければ全文
                $excerpt = ($pos !== false) ? mb_substr($text, 0, $pos + 1) : $text;
                // 最初の「。」より後ろに文章が続くかどうか
                $has_more = mb_strlen($excerpt) < mb_strlen($text);
              ?>
              <div class="news-body">
                <!-- 最初の「。」まで（全文を表示しているときはJSで非表示にする） -->
                <p class="news-excerpt"><?php echo esc_html($excerpt); ?></p>
                <?php if ($has_more): ?>
                  <!-- 全文（最初は非表示。ボタンを押すと一文と入れ替わる） -->
                  <div class="news-full" id="news-full-<?php the_ID(); ?>" hidden>
                    <?php the_content(); ?>
                  </div>
                  <!-- 続きがある記事だけ表示する切り替えボタン（処理はjs/main.jsのnewsMore） -->
                  <button class="news-more-btn js-news-more" type="button" aria-expanded="false" aria-controls="news-full-<?php the_ID(); ?>">続きを読む</button>
                <?php endif; ?>
              </div>
            </article>
            <?php
                endwhile;
              endif;
            ?>
          </div>
        </section>
      </article>
    </main>

<?php get_footer(); ?>