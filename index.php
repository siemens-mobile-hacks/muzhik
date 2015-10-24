<!DOCTYPE html>
<html>
<head>
	<title>Дождь из мужиков</title>
	<script src="bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>
	<link rel="import" href="bower_components/emoji-rain/emoji-rain.html">
    <script>
        var dozhd = new Audio('/rain.mp3');
        dozhd.play();
        dozhd.addEventListener('ended', function() {
            this.currentTime = 0;
            this.play();
        }, false)
    </script>
	<meta charset="utf-8">
</head>
<body>
<emoji-rain active></emoji-rain>

<!-- Yandex.Metrika counter --><script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter33226843 = new Ya.Metrika({ id:33226843, clickmap:true, trackLinks:true, accurateTrackBounce:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="https://mc.yandex.ru/watch/33226843" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
</body>
</html>
