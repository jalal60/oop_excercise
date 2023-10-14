<?php
class ZoomConnection
{
    private static $count = 0;
    public function __construct()
    {
        self::$count++;
    }
    public static function getCount()
    {
        return self::$count;
    }
    public function __destruct()
    {
        self::$count--;
    }
}
$conn1 = new ZoomConnection();
$conn2 = new ZoomConnection();
$conn3 = new ZoomConnection();
$conn4 = new ZoomConnection();
$conn5 = new ZoomConnection();
unset($conn2);
echo "Total Zoom Connection=" . ZoomConnection::getCount();
