<?php get_header() ?>

    <!-- main -->
    <main>
      <article>
        <!-- ページタイトル -->
        <section class="page-header">
          <div class="inner">
            <h1 class="page-title"><span>CONTACT</span>お問い合わせ</h1>
          </div>
        </section>

        <!-- お問い合わせフォーム（Contact Form 7） -->
        <section class="form-container section">
          <div class="inner">
            <p class="form-lead">診療内容や費用、当院へのご質問など、お気軽にお問い合わせください。<br>内容を確認後、担当者よりご連絡いたします。<br>※ご予約は<a href="<?php echo home_url(); ?>/reservation">Web予約フォーム</a>またはお電話（03-1234-5678）にて承っております。</p>

            <!-- お問い合わせフォーム（固定ページの本文に入れたショートコードを表示） -->
            <?php
              if (have_posts()):
                while (have_posts()):
                  the_post();
                  the_content();
                endwhile;
              endif;
            ?>
          </div>
        </section>
      </article>
    </main>

<?php get_footer(); ?>
