(()=>{
	ajax("get","03-header.html","","text")
			.then(html=>{
				document.getElementById("header").innerHTML=html;
			})
})();
