function ajax(method, url, data = "", dataType = "json") {
	return new Promise((resolve, reject) => {
		//1、获取 xhr
		var xhr = new XMLHttpRequest();
		//2、创建请求
		xhr.open(method, url, true);

		//3、设置请求消息头
		if (method == "post") {
			xhr.setRequestHeader(
					"Content-Type", "application/x-www-form-urlencoded");
		}
		//4、设置回调
		xhr.onreadystatechange = function () {
			if (xhr.readyState == 4 && xhr.status == 200) {
				if (dataType == "json")
					resolve(JSON.parse(xhr.responseText))
				else
					resolve(xhr.responseText)
			} else
				throw new Error("请求出错：" + xhr.status)
		}
		//5、发送
		xhr.send(data);
	});
}



