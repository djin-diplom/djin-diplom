<?php
header('Content-Type: text/html; charset=windows-1251');
setlocale(LC_ALL,'ru_RU.65001','rus_RUS.65001','Russian_Russia.65001','russian');
?>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<? include("blocks/fancybox.php");?>
<!--��������-->
<script type="text/javascript" src="js/cycle.js"></script>
<script type="text/javascript" src="js/slideshow.js"></script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
     (function (d, w, c) {
          (w[c] = w[c] || []).push(function() {
               try {
                    w.yaCounter38786970 = new Ya.Metrika({
                         id:38786970,
                         clickmap:true,
                         trackLinks:true,
                         accurateTrackBounce:true
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
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/38786970" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script>
          function hide()
               {
                    var win = document.getElementById("win");
                    win.style.display = "none";
               }
               setTimeout("hide()", 3400);
</script>