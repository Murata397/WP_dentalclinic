<?php get_header(); ?>

    <!-- main -->
    <main>
      <article>
        <!-- ページタイトル -->
        <section class="page-header">
          <div class="inner">
            <h1 class="page-title"><span>MEDICAL</span>診療案内</h1>
          </div>
        </section>

        <!-- 診療内容（※テキストはサンプル文章） -->
        <section class="medical-container section">
          <div class="inner">
            <h2 class="section-title"><span>TREATMENT</span>診療内容</h2>
            <ul class="medical-list">
              <li class="medical-item">
                <i class="fa-solid fa-tooth"></i>
                <h3>一般歯科</h3>
                <p>むし歯や歯の痛み、詰め物・被せ物の治療を行います。できるだけ歯を削らず、残すことを大切にした治療を心がけています。</p>
              </li>
              <li class="medical-item">
                <i class="fa-solid fa-child-reaching"></i>
                <h3>小児歯科</h3>
                <p>お子さまが歯医者を怖がらないよう、少しずつ慣れていただきながら治療を進めます。フッ素塗布やシーラントによる予防も行っています。</p>
              </li>
              <li class="medical-item">
                <i class="fa-solid fa-shield-heart"></i>
                <h3>予防歯科</h3>
                <p>定期検診とクリーニングで、むし歯や歯周病を未然に防ぎます。歯科衛生士がご自宅でのケア方法もわかりやすくお伝えします。</p>
              </li>
              <li class="medical-item">
                <i class="fa-solid fa-teeth"></i>
                <h3>歯周病治療</h3>
                <p>歯ぐきの腫れや出血、口臭が気になる方はご相談ください。検査で状態を確認し、歯石除去などの治療で進行を防ぎます。</p>
              </li>
              <li class="medical-item">
                <i class="fa-solid fa-syringe"></i>
                <h3>口腔外科</h3>
                <p>親知らずの抜歯や、顎の痛み、お口の中のできものなどに対応します。痛みや腫れをできるだけ抑えた処置を行います。</p>
              </li>
              <li class="medical-item">
                <i class="fa-solid fa-star"></i>
                <h3>ホワイトニング</h3>
                <p>歯を削らずに、薬剤で歯本来の白さを取り戻します。医院で行うオフィスホワイトニングと、ご自宅で行うホームホワイトニングをご用意しています。</p>
              </li>
            </ul>
          </div>
        </section>

        <!-- 初診の流れ（※テキストはサンプル文章） -->
        <section class="flow-container section section-bg">
          <div class="inner">
            <h2 class="section-title"><span>FLOW</span>初診の流れ</h2>
            <ol class="flow-list">
              <li class="flow-item">
                <span class="flow-step">STEP 1</span>
                <h3>ご予約</h3>
                <p>お電話またはWebの予約フォームからご予約ください。</p>
              </li>
              <li class="flow-item">
                <span class="flow-step">STEP 2</span>
                <h3>受付・問診票</h3>
                <p>保険証をご提示いただき、問診票へのご記入をお願いします。</p>
              </li>
              <li class="flow-item">
                <span class="flow-step">STEP 3</span>
                <h3>検査・カウンセリング</h3>
                <p>お口の状態を確認し、治療方針をわかりやすくご説明します。</p>
              </li>
              <li class="flow-item">
                <span class="flow-step">STEP 4</span>
                <h3>治療開始</h3>
                <p>ご納得いただいたうえで、治療を始めます。</p>
              </li>
            </ol>
          </div>
        </section>

        <!-- 診療時間 -->
        <section class="hours-container section">
          <div class="inner">
            <h2 class="section-title"><span>HOURS</span>診療時間</h2>
            <div class="table-responsive">
              <table class="table hours-table">
                <thead>
                  <tr>
                    <th scope="col">診療時間</th>
                    <th scope="col">月</th>
                    <th scope="col">火</th>
                    <th scope="col">水</th>
                    <th scope="col">木</th>
                    <th scope="col">金</th>
                    <th scope="col">土</th>
                    <th scope="col">日</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">午前 9:30〜13:00</th>
                    <td>●</td>
                    <td>●</td>
                    <td class="closed">／</td>
                    <td>●</td>
                    <td>●</td>
                    <td>●</td>
                    <td class="closed">／</td>
                  </tr>
                  <tr>
                    <th scope="row">午後 14:00〜18:30</th>
                    <td>●</td>
                    <td>●</td>
                    <td class="closed">／</td>
                    <td>●</td>
                    <td>●</td>
                    <td class="closed">／</td>
                    <td class="closed">／</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <p class="hours-note">休診日: 水・日<br>※土曜日は午前のみ</p>
          </div>
        </section>

        <!-- ご予約・お問い合わせ ボタン-->
        <section class="cta-container section section-bg">
          <div class="inner">
            <a class="btn btn-primary btn-cta" href="<?php echo home_url(); ?>/reservation"><i class="fa-regular fa-calendar-check"></i>ご予約はこちら</a>
            <a class="btn btn-outline-primary btn-cta" href="<?php echo home_url(); ?>/contact"><i class="fa-regular fa-envelope"></i>お問い合わせはこちら</a>
          </div>
        </section>
      </article>
    </main>

<?php get_footer(); ?>