function Text(svg,x,y,fill,content){
	var text=document.createElementNS(svg.namespaceURI,"text");
	text.setAttribute("x",x);
	text.setAttribute("y",y);
	text.setAttribute("fill",fill);
	text.textContent=content;
	svg.appendChild(text);
	return text;
}
function Circle(svg,cx,cy,r,fill){
	var circle=document.createElementNS(svg.namespaceURI,"circle");
	circle.setAttribute("cx",cx);
	circle.setAttribute("cy",cy);
	circle.setAttribute("r",r);
	circle.setAttribute("fill",fill);
	svg.appendChild(circle);
	return circle;
}
function Text_btnclick(object,fill){
	object.setAttribute("fill",fill);
}
function Circle_btnclick(object,r){
	object.setAttribute("r",r);
}
function Text_btnclear(object,fill){
	object.setAttribute("fill",fill);
}
function Circle_btnclear(object,r){
	object.setAttribute("r",r);
}
function Text_remove(object){
	object.parentNode.removeChild(object);
}
function Circle_remove(object){
	object.parentNode.removeChild(object);
}