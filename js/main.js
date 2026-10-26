const menu = () => {

  //ハンバーガーメニュー、使用HTML要素取得
  //ハンバーガーボタン
  const btn = document.querySelector('.toggle-btn');
  //ナビメニュー
  const nav = document.querySelector('.header-nav-list');
  //メニュー背景
  const mask = document.querySelector('.mask');

  //メニューの開閉
  const toggle = (open) => {
    nav.classList.toggle('open', open);
    btn.classList.toggle('open', open);
    mask.classList.toggle('open', open);
    btn.setAttribute('aria-expanded', open);
    btn.setAttribute('aria-label', open ? 'メニューを閉じる' : 'メニューを開く');
  };

  //ハンバーガーボタンクリック処理
  btn.addEventListener('click', () => {
    toggle(!nav.classList.contains('open'));
  });

  //背景・メニュー内リンクのクリックで閉じる
  mask.addEventListener('click', () => toggle(false));
  nav.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => toggle(false));
  });
};

const reserveDate = () => {

  //予約フォームの日付入力欄
  const dates = document.querySelectorAll('.js-reserve-date');
  if (!dates.length) return;

  //明日以降のみ選択可能にする
  const tomorrow = new Date();
  tomorrow.setDate(tomorrow.getDate() + 1);
  const pad = (n) => String(n).padStart(2, '0');
  const min = `${tomorrow.getFullYear()}-${pad(tomorrow.getMonth() + 1)}-${pad(tomorrow.getDate())}`;

  dates.forEach((date) => {
    //日付とセットになっている時間帯（data-slot、なければidの date → time で探す。Contact Form 7用）
    const slot = document.getElementById(date.dataset.slot || date.id.replace('date', 'time'));
    if (!slot) return;
    date.min = min;

    //休診日（水・日）と土曜午後をチェック
    const check = () => {
      let message = '';
      if (date.value) {
        const day = new Date(`${date.value}T00:00:00`).getDay();
        if (day === 0 || day === 3) {
          message = '水曜日・日曜日は休診日です。';
        } else if (day === 6 && slot.value.startsWith('午後')) {
          message = '土曜日は午前のみの診療です。';
        }
      }
      date.setCustomValidity(message);

      //第2希望は日付か時間帯の片方だけ入力されていたらエラー
      if (!date.required) {
        slot.setCustomValidity(date.value && !slot.value ? '時間帯を選択してください。' : '');
        if (!date.validationMessage && slot.value && !date.value) {
          date.setCustomValidity('日付を選択してください。');
        }
      }
    };

    date.addEventListener('change', check);
    slot.addEventListener('change', check);
  });
};

const form = () => {

  //予約・お問い合わせフォーム
  const forms = document.querySelectorAll('.js-form');

  forms.forEach((target) => {
    target.addEventListener('submit', (e) => {
      e.preventDefault();

      //入力チェック（Bootstrapのバリデーション表示を使用）
      if (!target.checkValidity()) {
        target.classList.add('was-validated');
        target.querySelector(':invalid').focus();
        return;
      }

      //送信完了メッセージを表示
      //※静的HTMLのため実際の送信は行わない。WordPress化の際はContact Form 7などで送信処理を行う
      const complete = target.nextElementSibling;
      target.hidden = true;
      complete.hidden = false;
      complete.scrollIntoView({ behavior: 'smooth', block: 'center' });
    });
  });
};

menu();
reserveDate();
form();
