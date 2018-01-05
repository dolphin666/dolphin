/**
 * Created by web-01 on 2018/1/5.
 */
/*for(var i=1;i<=235;i++){
	console.log(i);
}*/
const http=require('http');
let serv=http.createServer(
		(req,res)=>{
			res.writeHead(200,{'content-type':'text/html'});
			res.write("Hello Node.js！！！");
			res.end("<h1 style='color:red'>Hello World!</h1>");
		}
);
serv.listen("2000");
