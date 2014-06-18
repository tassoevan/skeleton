<?php
namespace MyCompany\MyApplication;

use \RuntimeException;
use Slim\Slim;

class Application extends Slim
{
    private static $privateDir;

    public static function boot($privateDir)
    {
        self::$privateDir = $privateDir;
        umask(0002);
    }

    public function __construct($mode = null)
    {
        if ($mode === null) {
            $mode = $this->inferMode();
        }

        parent::__construct(array('mode' => $mode));

        call_user_func(function ($app) {
            include self::$privateDir . '/config.php';
        }, $this);

        $this->setupServices($this);
        $this->setupRoutes($this);
    }

    private function inferMode()
    {
        $configFiles = glob(self::$privateDir . '/*.env');

        if (count($configFiles) == 1) {
            return substr(basename($configFiles[0]), 0, -4);
        } else {
            throw new RuntimeException('application mode not defined');
        }
    }

    protected function setupServices(Application $app)
    {

    }

    protected function setupRoutes(Application $app)
    {
        
    }
}
