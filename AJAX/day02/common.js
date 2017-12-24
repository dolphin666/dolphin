/**
 * Created by web-01 on 2017/12/23.
 */
function $(id) {
	return document.getElementById(id);
}
function getXhr() {
	if(window.XMLHttpRequest){
		return new XMLHttpRequest();
	}else{
		return new ActiveXObject("Microsoft.XMLHttp");
	}
}
