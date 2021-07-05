# xss-sample

XSSが発生するページのサンプルコード

## 参考

https://viral-community.com/blog/xss-1835/

## 製作時間

35分ほど

## 実行環境

https://macneet.com/v-crews/q2/

上記サイトで名前に 

``` javascript
"><script>alert(document.cookie)</script><!--
```

などと入れると情報がダイアログで表示されてしまう。