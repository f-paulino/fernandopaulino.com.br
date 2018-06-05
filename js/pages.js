var ducumentBody = document.querySelector('body');
var currentUrl = window.location.href;
currentUrl = currentUrl.split('/');
currentUrl = currentUrl.pop();

var pageScript = document.createElement("script");
pageScript.src = "js/"+currentUrl+".js";
console.log(pageScript);
ducumentBody.appendChild(pageScript);