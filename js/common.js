console.log(GetQueryString());
console.log(GetBrowserName());


window.onload = function () {
    // ここに読み込み完了時に実行してほしい内容を書く。

    console.log(myValues.site_url); //get_site_url()の値

    console.dir(myValues);

};

/* ----------------------------------------------------------
** functions
** GetQueryString()
** GetPostValue(lavel)
** RemoveHtml(str)
---------------------------------------------------------- */

// urlパラメーターを連想配列に格納
function GetQueryString() {
    var result = {};
    if (1 < window.location.search.length) {
        // 最初の1文字 (?記号) を除いた文字列を取得する
        var query = window.location.search.substring(1);

        // クエリの区切り記号 (&) で文字列を配列に分割する
        var parameters = query.split('&');

        for (var i = 0; i < parameters.length; i++) {
            // パラメータ名とパラメータ値に分割する
            var element = parameters[i].split('=');

            var paramName = decodeURIComponent(element[0]);
            var paramValue = decodeURIComponent(element[1]);

            // パラメータ名をキーとして連想配列に追加する
            result[paramName] = paramValue;
        }
    }
    return result;
}

// $_POSTの中身を取得
// ※使用するとソースコードからPOSTの内容が見えてしまいます。
// フォーム送信等のPOSTデータには使用することは控えてください。
function GetPostValue(lavel) {
    // 許可するページを選択
    var permit_page = {
        index: true,
        date: true,
        archive: true,
        category: true,
        taxonomy: true,
        tag: true,
        single: true,
        admin: true,
        allPage: false //前項設定関係なく全てのページでの許可
    };

    // 許可するページ且つ、allPageで許可がある場合
    if (permit_page[myValues.page_type] && permit_page['allPage']) {
        // localize_script でコメントアウトしていたらnullを返す
        if (myValues.post_value) {
            // 引数が指定されている場合は指定のデータ名の値を返す
            if (lavel) {
                var postedData = myValues.post_value[lavel];
                return postedData;
            } else { // 引数が指定されていない場合$_POSTをそのまま返す
                var postedData = myValues.post_value;
                return postedData;
            }
        } else {
            return null;
        }
    } else {
        console.log("error: This page is not permitted.");
        return null;
    }
}

// HTMLタグをが含まれいてる文字列を渡すとHTMLタグを削除したものを返します。
function RemoveHtml(str) {
    return String(str).replace(/<("[^"]*"|'[^']*'|[^'">])*>/g, '');
}

// 使用中のブラウザを返します。
function GetBrowserName() {
    const ua = window.navigator.userAgent.toLowerCase();
    let name = "unknown";
    if (ua.indexOf("msie") !== -1) {
        const ver = window.navigator.appVersion.toLowerCase();
        if (ver.indexOf("msie 6.") !== -1) {
            name = 'ie6';
        } else if (ver.indexOf("msie 7.") !== -1) {
            name = 'ie7';
        } else if (ver.indexOf("msie 8.") !== -1) {
            name = 'ie8';
        } else if (ver.indexOf("msie 9.") !== -1) {
            name = 'ie9';
        } else if (ver.indexOf("msie 10.") !== -1) {
            name = 'ie10';
        } else {
            name = 'ie';
        }
    } else if (ua.indexOf('trident/7') !== -1) {
        name = 'ie11';
    } else if (ua.indexOf('edge') !== -1) {
        name = 'edge';
    } else if (ua.indexOf('chrome') !== -1 && ua.indexOf('edge') === -1) {
        name = 'chrome';
    } else if (ua.indexOf('safari') !== -1 && ua.indexOf('chrome') === -1) {
        name = 'safari';
    } else if (ua.indexOf('opera') !== -1) {
        name = 'opera';
    } else if (ua.indexOf('firefox') !== -1) {
        name = 'firefox';
    }
    return name;
}

//アコーディオン
$(function () {
    // タイトルをクリックすると
    $(".js-accordion-title").on("click", function () {
        // クリックしたタイトル以外のopenクラスを外す(－から＋にする)
        $(".js-accordion-title").not(this).removeClass("open");
        // クリックしたタイトル以外のコンテンツを閉じる
        $(".js-accordion-title").not(this).next().slideUp(300);
        // クリックしたタイトルにopenクラスを付け外しして＋と－を切り替える
        $(this).toggleClass("open");
        // クリックしたタイトルの次の要素(コンテンツ)を開閉
        $(this).next().slideToggle(300);
    });
});

//遷移された時該当の記事（アコーディオン）を開く処理
$(function () {
    // URLのハッシュ部分（id）を取得
    const urlHash = location.hash;
    // そのidを持つ要素がなかったら処理を抜ける
    if (!$(urlHash).length) return;

    // アコーディオンの要素を開く処理
    $(urlHash)
        .find('.accordion-title')
        .addClass('open')
        .next()
        .show();
});

//skick　
$('.slick-slider').slick({
    slidesToShow: 2,
    slidesToScroll: 2,
    infinite: true,
    dotsClass: 'slide-dots',
    dots: true,
    responsive: [{
        breakpoint: 768,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    }]
});

//ハンバーガーメニュー
$(function () {
    $(".open-btn").click(function () {//ボタンがクリックされたら
        $(this).toggleClass('active');//ボタン自身に activeクラスを付与し
        $(".inside").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
        $("body").toggleClass("active");
    });

    $(".inside a").click(function () {//ナビゲーションのリンクがクリックされたら
        $(".open-btn").removeClass('active');//ボタンの activeクラスを除去し
        $(".inside").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去
        $("body").removeClass("active");
    });
});
//準備中ポップアップ表示
document.getElementById("alert-content").onclick = function () {
    alert('現在準備中です');
};
