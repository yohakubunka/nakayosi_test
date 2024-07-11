# クライアント名・プロジェクト名

| クライアント名   | なかよし保育園                                                               |
| :--------------- | :--------------------------------------------------------------------------- |
| 顧客番号         | 0044                                                                         |
| デザイン担当者   | ヤマナカ                                                                     |
| 初期構築         | 古田                                                                         |
| CMS              | WordPress                                                                    |
| ドメイン         | example.com                                                                  |
| ドメイン管理     | 余白管理                                                                     |
| 本番サーバー     | 余白管理                                                                     |
| 本番サーバー状態 | 未対応告                                                                     |
| テストサーバー   | http://yohakutest.xsrv.jp/nakayoshi/wp/                                      |
| Bitbucket        | https://bitbucket.org/seto-t/nakayoshi-wp/src/master/                        |
| NAS              | share > 制作中の案件 > 0044\_社会福祉法人篠田福祉会                          |
| GoogleDrive      | https://drive.google.com/drive/u/0/folders/1_goz_2dhOpu5XM-72XvqareCFeegwNFi |

## 案件概要

例:なかよし保育園の新規作成になります。
リニューアル目的は保護者をターゲットとした安心感のあるデザインにすることで、園児の獲得を目指す。
スマホ対応・お問い合わせ機能をつけることで 365 日対応可能な体制にいたします。
wordpress を使用しサイトの更新をいたします。
リニューアルでは一部お知らせを WordPress へ移動させます。  
サーバー・ドメインは余白で管理・取得する。
PHP・MySQL・Apache のバージョンは WordPress の必要要件を満たしているのを確認済みです。

## 必須プラグイン

- Advanced Custom Fields (カスタムフィールド設定)
- Contact Form 7 (お問い合わせフォーム)
- Custom Post Type UI (カスタム投稿設定)

## 投稿

- お知らせ
- 募集要項
- 先輩の声

## お客様更新

- 園の概要
- ギャラリー
- 一日の流れ
- 年間行事
- 定員
- 提出書類

## 注意事項

例:セクション毎の余白が乱調です。フロントコーディングの際は注意してクラスの作成を行ってください。詳しいデザインの仕様は GoogleDrive 内の仕様書を確認してください。  
https://drive.google.com/drive/x/x/folders/XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

### セクションクラスの命名規則

セクションセレクタのクラス名は命名規則に従って付与してください。  
`.section-init`を必ずつけセクションの余白毎に`.pad-y-50`のようなクラスをつけてください。

```
// HTML記述例

<section class="section-init pad-y-50">
{{content}}
</section>
```

```
// SCSS記述

.section-init {
  // sectionの共通設定
  max-width: $break-point_xl;
  margin: auto;
  padding: 16px;

  // 上下50pxの場合
  &.pad-y-50 {
    padding-top: 50px;
    padding-bottom: 50px;
  }

  // 上下100pxの場合
  &.pad-y-100 {
    padding-top: 100px;
    padding-bottom: 100px;
  }

  // 上50px、下100pxの場合
  &.pad-t-50-b-100 {
    padding-top: 50px;
    padding-bottom: 100px;
  }
}
```

## 修正などの対応記録

| 2022.12.13 | 瀬戸 | 初期構築 ❶ 　 bitbucket・テストの用意・README の記述 |
