<?php

$activePage = basename($_SERVER['PHP_SELF'], ".php");

?>
<footer class="text-center text-white <?= ($activePage == 'team') ? 'fixed-bottom':''; ?>">
  <div class="text-center p-3">
    <span class="copyright">© 2023 Copyright:
    <a href="https://mdbootstrap.com/">codebytim</span>
  </div>
</footer>