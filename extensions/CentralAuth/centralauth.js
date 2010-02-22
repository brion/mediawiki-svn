cursor = { x : 0, y : 0 };
function updateCursorPosition(e) {
	e = e || window.event;
	cursor.x = e.clientX + ( document.documentElement.scrollLeft || document.body.scrollLeft ) - document.documentElement.clientLeft;
	cursor.y = e.clientY + ( document.documentElement.scrollTop || document.body.scrollTop ) - document.documentElement.clientTop;
}
document.onmousemove = updateCursorPosition;

methodHint = null;
function showMethodHint( methodName ) {
	hideMethodHint();

	method = wgMergeMethodDescriptions[methodName];
	helpHtml = "<p class='merge-method-help-name'>" + method.short + "</p>" + method.desc;

	methodHint = document.createElement( 'div' );
	methodHint.innerHTML = helpHtml;
	methodHint.setAttribute( 'class', 'merge-method-help-div' );
	methodHint.style.left = cursor.x + 'px';
	methodHint.style.top = cursor.y + 'px';
	methodHint.setAttribute( 'onclick', 'hideMethodHint()' );
	document.getElementById( 'globalWrapper' ).appendChild( methodHint );
}
function hideMethodHint() {
	if( methodHint ) {
		methodHint.parentNode.removeChild( methodHint );
		methodHint = null;
	}
}
