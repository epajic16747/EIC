<?php
        session_start();
    
    if (isset($_SESSION['username']))
    {
        $userName = $_SESSION['username'];
        echo "Admin vec logovan......";
    }
    else
    {
      if(isset($_POST['username']) && isset($_POST['password']))
      {
          $usernameInputValue = $_POST['username'];
          $passwordInputValue = $_POST['password'];

         $xml = simplexml_load_file('pages/users.xml') or die("Error: Xml dokument je prazan");
         $userName = (string)$xml->admin->username;
         $passWord =  (string)$xml->admin->password; 

         if($usernameInputValue == $userName && $passwordInputValue == $passWord)
         {
              $_SESSION['username'] = $userName;
              echo "<br><br><h1> You are now logged in.</h1>";
         }
         else
         {
          echo "<br><br><h1> Wrong password or username</h1>";
         }

         print '
         <script>
         var timeOut = setTimeout(povratnaFunckija, 100);

         function povratnaFunckija()
         {
                window.history.back();
         }
         </script>
         ';

              
      }
    }

?>