<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nicolas
 * Date: 07/11/13
 * Time: 14:28
 * To change this template use File | Settings | File Templates.
 */

namespace Icap\LessonBundle\Installation;

use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;
use Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand;
use Claroline\InstallationBundle\Additional\AdditionalInstaller as BaseInstaller;
use Icap\LessonBundle\Installation\Updater\Updater13;

class AdditionalInstaller extends BaseInstaller
{

    public function postUpdate($currentVersion, $targetVersion)
    {
        if (version_compare($currentVersion, '1.3', '<') && version_compare($currentVersion, '1.2', '>=') && version_compare($targetVersion, '1.3', '>=') ) {
            $updater13 = new Updater13($this->container);
            $updater13->setLogger($this);
            $updater13->postUpdate();
        }
    }

    public function displayLog($message)
    {
        $this->log($message);
    }
}