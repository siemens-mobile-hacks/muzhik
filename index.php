<?php
    header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
<head>
    <title>☔</title>
    <script src="bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>
    <link rel="import" href="bower_components/emoji-rain/emoji-rain.html">
    <style>
        @font-face {
            font-family: emoji;

            src: local('Apple Color Emoji'),
            local('Android Emoji'),
            local('Segoe UI'),
            local(EmojiSymbols),
            local(Symbola);

            /* Emoji unicode blocks */
            unicode-range: U+1F300-1F5FF, U+1F600-1F64F, U+1F680-1F6FF, U+2600-26FF;
        }
        html, body {
            margin: 0;
            height: 100%;
            width: 100%;
        }
        main {
            height: 100%;
            min-height: 100%;
            padding: 0;
            margin: 0;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #man {
            font-family: emoji;
            font-size:40vh;
            cursor: pointer;
        }
    </style>
    <script>
        var dozhd = new Audio('/rain.mp3');
        function initMen() {
            dozhd.play();
            document.getElementsByTagName('main')[0].style.display='none';
            document.getElementById('rain').start();
            dozhd.addEventListener('ended', function() {
                this.currentTime = 0;
                this.play();
            }, false);
        }
    </script>
    <meta charset="utf-8">
</head>
<body>
<main>
    <div id="man" onclick="initMen()">👨</div>
</main>
<emoji-rain id="rain"></emoji-rain>

<!-- Yandex.Metrika counter --><script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter33226843 = new Ya.Metrika({ id:33226843, clickmap:true, trackLinks:true, accurateTrackBounce:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="https://mc.yandex.ru/watch/33226843" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
</body>
</html>
