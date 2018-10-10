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

- .envのDB周りの設定(laradock用) 
```
 DB_CONNECTION=mysql
 DB_HOST=mysql
 DB_PORT=3306
 DB_DATABASE=default
 DB_USERNAME=default
 DB_PASSWORD=secret
``` 