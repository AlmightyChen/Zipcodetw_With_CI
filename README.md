# 在 CodeIgniter 上使用 ZipcodeTW

說簡單點就是把用 pip 把 zipcodetw 下載回來並放入自己的python資料夾, 創建一個自己的.py程式

使用shell_exec 執行 並接收資料

主要修改項目

```
- application
--- controllers
------ Welcome.php
- python
--- zipcode.py
```

簡單的內容如下 (放在 controllers 裡面)

* 想執行python時，最後的命令行需要加上 2>&1 （原因請自行Google）
* python資料夾要放在application外

```php
	public function index(){
		//台灣地址
		$address = "台北市信義區";
		//記得要加 2>&1
		$command ='python python/zipcode.py "'.$address.'" 2>&1';
		//執行並接收資料
		$output = shell_exec($command);
		echo $output;
	}
```

最後感謝 Zipcodetw 的 作者 Mosky 拯救芸芸眾生

Zipcodetw : [http://zipcode.mosky.tw/](http://zipcode.mosky.tw)

Zipcodetw Github : [https://github.com/moskytw/zipcodetw](https://github.com/moskytw/zipcodetw)
