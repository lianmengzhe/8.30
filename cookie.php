<?php

setcookie("name","bob",time()-100);
echo $_COOKIE["name"];