<?php
/**
 * @author    Sven Mäurer <sven.maeurer@jtl-software.com>
 * @copyright 2010-2013 JTL-Software GmbH
 */

namespace jtl\Connector\WooCommerce\Controller\Traits;

use jtl\Connector\Model\DataModel;

trait PushTrait
{
    /**
     * Called on a push on the main model controllers including their sub model controllers.
     *
     * @param DataModel $data Data coming from JTL-Wawi
     * @param $model
     *
     * @return array The saved models.
     */
    abstract protected function pushData($data, $model);
}