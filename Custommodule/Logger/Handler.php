<?php
namespace I95dev\Custommodule\Logger;

use Monolog\Logger;

class Handler extends \Magento\Framework\Logger\Handler\Base
{
    protected $loggerType = Logger::NOTICE;

    protected $fileName = '/var/log/i95dev_custom_log_file.log';
}
