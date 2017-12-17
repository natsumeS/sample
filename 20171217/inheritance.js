function SvgObject(svg,tag,attr){
	this.ob=document.createElementNS(svg.namespaceURI,tag);
	for(t in attr){
		this.ob.setAttribute(t,attr[t]);
	}
	svg.appendChild(this.ob);
}
SvgObject.prototype.remove=function(){
	this.ob.parentNode.removeChild(this.ob);
}
//
function Text(svg,x,y,fill,content){
	SvgObject.call(this,svg,"text",{
		"x":x,
		"y":y,
		"fill":fill,
	});
	this.ob.textContent=content;
	this.fill=fill;
}
Text.prototype.btnclick=function(fill){
	this.ob.setAttribute("fill",fill);
}
Text.prototype.btnclear=function(){
	this.ob.setAttribute("fill",this.fill);
}
//
function Circle(svg,cx,cy,r,fill){
	SvgObject.call(this,svg,"circle",{
		"cx":cx,
		"cy":cy,
		"r":r,
		"fill":fill,
	});
	this.r=r;
}
Circle.prototype.btnclick=function(r){
	this.ob.setAttribute("r",r);
}
Circle.prototype.btnclear=function(){
	this.ob.setAttribute("r",this.r);
}
//
var inherits = function(childCtor, parentCtor) {
	Object.setPrototypeOf(childCtor.prototype, parentCtor.prototype);
};
inherits(Text,SvgObject);
inherits(Circle,SvgObject);