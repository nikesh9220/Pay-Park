// JavaScript Document

function getArea(str){
	if(window.XMLHttpRequest){
		xmlhttp = new XMLHttpRequest();
		}else{
			xmlhttp = new ActiveXObject("Microsoft.XMLHttp");
			}
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
			document.getElementById("areaSelectInput").innerHTML = xmlhttp.responseText;
			}
		}
	xmlhttp.open("GET","gettingAreaFromCity.php?city="+str, true);
	xmlhttp.send();
	}