<?php
//Write a class called 'Logger' with a static property called 'logCount' 
//that keeps track of the number of log messages. 
//Implement a static method to log a message.
class Logger
{
    public static $logCount = 0;
    public static function log($message)
    {
        echo $message . PHP_EOL;
        self::$logCount++;
    }
}
Logger::log("Message 1");
Logger::log("Message 2");
Logger::log("Message 3");
Logger::log("Message 4");
Logger::log("Message 5");
echo "Total Log count=" . Logger::$logCount;
