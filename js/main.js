// Yandex Metrica 
var yaPx = "<noscript><div><img src='https://mc.yandex.ru/watch/47900204' style='position:absolute;left:-9999px;'/></div></noscript>";
document.querySelector("#all").insertAdjacentHTML("afterEnd", yaPx);
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter47900204 = new Ya.Metrika({
                id:47900204,
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true,
                trackHash:true
            });
        } catch(e) { }
    });
    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = "https://mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
      d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");

//Tawk.to
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5a99f35ed7591465c70833d9/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
})();

