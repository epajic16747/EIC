<?php
	session_start();
	session_unset();

	print '
		<br><br><h1>You are now logged out.</h1>
       <script>
              var timeOut = setTimeout(povratnaFunckija, 100);

              function povratnaFunckija()
              {
                     window.history.back();
              }
       </script>
       ';
?>