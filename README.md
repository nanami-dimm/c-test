# アプリケーション名

    FashionablyLate

## 環境構築

1,ローカルにクローンする
git@github.com:nanami-dimm/c-test.git

2,docker の設定
$docker-compose up -d --build

3,laravel パッケージのインストール
#php コンテナにログイン
$docker-compose exec php bash
$composer install

4,.env ファイルの作成、修正
#php コンテナの中で行う
$cp .env.example .env

5,マイグレーションの実行
#php コンテナの中で行う
$php artisan migrate

6,ファクトリの実行
#php コンテナの中で行う
$php artisan db:seed

## 使用技術(実行環境)

- Laravel 8.83.27
  mysql 8.0.26
  nginx 1.21.1
  php 7.4.9

## ER 図

ctest.drawio.png に作成した

## URL

- http://localhost/
