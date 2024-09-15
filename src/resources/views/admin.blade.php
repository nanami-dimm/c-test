@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
@endsection
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo"  >
                FashionablyLate
            </a>
        </div>
        <div class="logout__button">
            <button class="logout__button-submit" type="submit"><a class="logout" href="/login">logout</a></button>
        </div>
    </header>
<main>
    
    <div class="admin__content">
        <div class="admin-form__heading">
            <p>Admin</p>
        </div>

        <form class="search-form" action="/admin" method="post">
        <div class="search-form__item">
            <input class="search-form__item-input" type="text" placeholder="名前やメールアドレスを入力してください">
            <select class="search-form__item-detail">
                <option value="">性別</option>
                <option value="male">男性</option>
                <option value="female">女性</option>
                <option value="other">その他</option>
            </select>
            <select class="search-form__item-detail">
                <option value="">お問い合わせの種類</option>
                <option value="send">商品のお届けについて</option>
                <option value="exchange">商品の交換について</option>
                <option value="trouble">商品トラブル</option>
                <option value="inquiry">ショップへのお問い合わせ</option>
                <option value="etc">その他</option>
            </select>
            <select class="search-form__item-detail">
                <input value="date" type="date">年/月/日</input>
            </select>
        </div>
        <div class="search-form__button">
            <button class="search-form__button-submit" type="submit">検索</button>
        </div>
        <div class="reset-form__button">
            <button class="reset-form__button-submit" type="submit">リセット</button>
        </div>
        <div class="export-form__button">
            <button class="export-form__button-submit">エクスポート</button>
        </div>
    </form>
    <div class="admin-table">
        <table class="admin-table__inner">
            <tr class="admin-table__row">
                <th class="admin-table__header">
                    <span class="admin-table__header-span">名前</span>
                    <span class="admin-table__header-span">性別</span>
                    <span class="admin-table__header-span">メールアドレス</span>
                    <span class="admin-table__header-span">お問い合わせの種類</span>
                </th>
                <div class="detail-form__buttonn">
                    <button class="detail-form__button-submit" type="submit">詳細</button>
                </div>
            </tr>
        </table>
    </div>
</main>


