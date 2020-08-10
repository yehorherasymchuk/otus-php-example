<?php
// PHP >= 7.1
pcntl_async_signals(true);

function sigHandler($sigCode)
{
    switch($sigCode){
        case SIGTERM:
            echo "SIGTERM".PHP_EOL;
        break;
        case SIGHUP:
            echo "SIGHUP".PHP_EOL;
        break;
        case SIGUSR1:
            echo "SIGUSR1".PHP_EOL;
        break;
        case SIGKILL:
	    echo "SIGKILL".PHP_EOL;
        break;
        default:
            echo "1".PHP_EOL;
        break;
    }
}

pcntl_signal(SIGTERM, "sigHandler");
pcntl_signal(SIGHUP, "sigHandler");
pcntl_signal(SIGUSR1, "sigHandler");

while(true) {
    sleep(100);
}
