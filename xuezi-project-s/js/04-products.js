(() => {
	var kw = location.search.split("=")[1];
	ajax("get","data/04-products/products.php?kw="+kw+"&pno=0","")
			.then(output=>{
				var data=output.data;
				var html="";
				for(var p of data){
					html+=`
						<li>
            <a href="05-product-details.html?lid=${p.lid}" title=${p.title}>
              <img src="${p.sm}" alt="">
            </a>
            <p>
              <span class="price">&yen;${p.price}</span>
              <a href="05-product-details.html?lid=${p.lid}">${p.title}</a>
            </p>
            <div>
              <span class="reduce">-</span>
              <input type="text" value="1">
              <span class="add">+</span>
              <a href="#" class="addCart">加入购物车</a>
            </div>
          </li>
					`
				}
				document.getElementById("show-list").innerHTML=html;
			})
})()