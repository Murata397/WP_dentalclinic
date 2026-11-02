<?php get_header(); ?>

    <!-- main -->
    <main>
      <article>
        <!-- ページタイトル -->
        <section class="page-header">
          <div class="inner">
            <h1 class="page-title"><span>RESERVATION</span>Web予約</h1>
          </div>
        </section>

        <!-- 予約フォーム（Booking Package） -->
        <section class="form-container section">
          <div class="inner">
            <p class="form-lead">以下のご希望日時を選択し、必要事項をご入力のうえ、送信してください。<br>ご希望の日時を確認後、当院よりお電話またはメールにてご連絡いたします。<br>※ご連絡をもって予約確定となります。お急ぎの方はお電話（03-1234-5678）にてご予約ください。</p>

            <!-- 予約カレンダー（固定ページ「ご予約」の本文に入れたBooking Packageのショートコード [booking_package id=3] を表示） -->
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
