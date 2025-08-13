
# Laravel API - Contact App

このリポジトリは、Nuxt 3 フロントエンドと連携する Laravel バックエンド部分です。  
フロントエンド側のコードはこちらにあります → [Nuxt 3 Frontend Repository](https://github.com/komataku02/nuxtjp)

## セットアップ方法

```bash
# 依存パッケージのインストール
composer install

# .env の設定
cp .env.example .env
# MySQL の接続情報を編集

# マイグレーション & シーディング
php artisan migrate --seed

# 開発サーバー起動
php artisan serve

cd ~/coachtech/laravel/laravel-api
git add README.md
git commit -m "Add README with frontend repo link"
git push
