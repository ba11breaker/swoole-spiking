<?php

use Swoole\Coroutine as Co;

Co\run(function() {
    go(function() {
        Co::sleep(1);
        echo "Done 1\n";
    });

    go(function() {
        Co::sleep(1);
        echo "Done 2\n";
    });
});



