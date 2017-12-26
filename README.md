# PSR-4 autoload demo code

### 簡易Demo三種使用composer管理autoload的方式 
### 1. classmap
### 2. psr-4
### 3. files

### 主程式位置 /public/index.php
### 簡易教學

```
關鍵檔案 : composer.json 修改完成後必須執行 composer dump-autoload

"autoload" : {
    "classmap": [
      "library" //要引入的namespace
    ],
    "files": [
      "help/function.php" //要引入的檔案位置
    ],
    "psr-4": {
      "App\\": "app/" //前面為"命名空間前置名稱", 後面為實際對應的目錄(在此App(namespace)底下的檔案都可以被autoload)
    }
}

classmap 使用檔案 : library/lib1.php , library/lib2.php , 需注意namespace
psr-4 使用檔案 : app/src/lib3.php  , 需注意namespace
files 使用檔案 : help/function.php , 純粹引入外部檔案           
```

### 備註 : vendor資料已涵蓋在內 不須額外composer install
