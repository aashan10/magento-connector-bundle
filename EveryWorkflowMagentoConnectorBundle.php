<?php

/**
 * @copyright EveryWorkflow. All rights reserved.
 */

declare(strict_types=1);

namespace EveryWorkflow\MagentoConnectorBundle;

use EveryWorkflow\MagentoConnectorBundle\DependencyInjection\MagentoConnectorExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class EveryWorkflowMagentoConnectorBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new MagentoConnectorExtension();
    }
}
