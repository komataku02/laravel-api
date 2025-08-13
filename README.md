# Laravel API (Contacts CRUD)

## Setup
```bash
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate --seed
php artisan serve
---

## 動作メモ（共有用）
- フロント `.env`：`NUXT_PUBLIC_API_BASE=http://127.0.0.1:8000/api`
- バックエンド CORS：`http://localhost:3000` と `http://127.0.0.1:3000` を許可
- 起動：
  - Backend: `php artisan serve`（:8000）
  - Frontend: `yarn dev`（:3000）

---
