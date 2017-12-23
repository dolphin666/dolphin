/**
 * Created by web-01 on 2017/12/21.
 */
var names=new Array();
do{var input=prompt("请输入员工姓名");
    if(input !="quit"){
        names[names.length]=input;
    }
}while(input != "exit");
for(var i=names.length-1;i>=0;i--){
    console.log(names[i]);
}