# validation-app-practice

## 概要
COACHTECH 教材 Tutorial 9-6「バリデーション ハンズオン演習」で作成した成果物です。
フォームリクエストを使ったバリデーションと日本語エラーメッセージを備えた「ユーザー登録フォーム」を作成しました。

## 使用技術
- PHP 8.x
- Laravel 10.x
- Laravel Sail（Docker Compose）
- FormRequest / バリデーションルール

## 学んだこと
- $request->validate() を使ったバリデーションルール（required, email, unique, min）の指定方法
- エラーメッセージの日本語化と、フィールド毎のカスタマイズ
- Blade での @error ディレクティブと old() ヘルパーによる入力値の復元

## 動作確認
- http://localhost
  - LaravelのWelcomeページが表示されることを確認

- http://localhost/register
  - ユーザー登録画面が表示されることを確認