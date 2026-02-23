<?php

use Framework\Core\Env;

// APP_ENVの値があればdockerと判断
if (getenv('APP_ENV') !== false) {
    return;
}

Env::load();
