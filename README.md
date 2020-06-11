# Laravel 7 城市旅遊

隨著全球空中交通也是一直在持續發展中，航空公司更加多樣化的選擇也讓每年的旅客人數向上提升，發展城市旅遊最大的目的還是經濟，怎麼樣將城市打造成適合各國旅客喜愛的地方，國際化的設施絕對是不可少的，另外加上具有特色的美食以及文化。Laravel 7 城市旅遊主要是用 [QuickAdminPanel](https://quickadminpanel.com) 生成的，除了一些定制代碼，可依需求彈性改造的工具。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/login` 來進行登入，預社的電子郵件和密碼分別為 __admin@admin.com__ 和 __password__ 。

----

## 畫面截圖
![](https://i.imgur.com/CYKBV4P.png)
> 選出值得觀光遊覽的城市

![](https://i.imgur.com/ukebBPs.png)
> 若沒有交通工具、景點較為偏僻或是帶長輩出門的人可考慮，另外也會參考一日遊行程中各景點的到訪時間用以避開人潮