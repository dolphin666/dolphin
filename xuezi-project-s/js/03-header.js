//加载header
(()=>{
	ajax("get","03-header.html","","text")
			.then(html=>{
				document.getElementById("header").innerHTML=html;
	//为查询按钮绑定单击事件跳转
				var topInput=document.getElementById("top-input");
				topInput.getElementsByClassName("search-img")[0].onclick=function () {
					var kw=document.getElementById("txtSearch").value;
					if(kw.trim().length!=0){
						var url="http://localhost/dolphin/xuezi-project-s/04-products.html?kw="+kw;
						location=url;
					}
				}
			})
})();

