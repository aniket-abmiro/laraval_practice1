<?php

use core\Authenticator;
(new Authenticator)->logout();


header('location:/login');
exit();