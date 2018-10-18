# laravel-sampleapp

---
「Laravel Webアプリケーション開発 輪読&勉強会」のレポジトリです。

[第一回] https://weeyble-php.connpass.com/event/103836/

---

書籍：
「PHPフレームワーク Laravel Webアプリケーション開発 バージョン5.5 LTS対応」
https://amzn.to/2xwEIAS


---

clone
```
git clone --recursive git@github.com:weeyble/laravel-sampleapp.git
```

環境設定
```
cd laravel-sampleapp; cp env-sample laradock/.env; cp sampleapp/.env.example sampleapp/.env
```

docker-composeの起動 (laradock内で)

```
docker-compose up -d nginx mysql workspace
```

workspaceにbashでログイン
```
docker-compose exec --user=laradock workspace bash
```

app_keyの設定
```
php artisan key:generate
```

Laravel画面が表示されたら取り敢えずOK

http://localhost

#変えた設定メモ
- mysqlのバージョンを5.7に固定 

　　(ref: https://github.com/laradock/laradock/issues/1392)

----
chapter1 まとめ

[Laradoc設定](https://github.com/weeyble/laravel-sampleapp/commit/6e1cb6cb5421e0bba6f4c0cd8ac9a862879df401#diff-bd81acc1245a9b57cd054e84a8ea0f08)

[sampleappの設定](https://github.com/weeyble/laravel-sampleapp/commit/8467e64408448ba1681b06751dfefdb96a4b6b4b#diff-3fa24f1344183721ce38f9740c6d6e9a)

[mailhogの設定](https://github.com/weeyble/laravel-sampleapp/commit/120c188d31d69001e56ea3e0aa754c52e1d6f33b)

----

