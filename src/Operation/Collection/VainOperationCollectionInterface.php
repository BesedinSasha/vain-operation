<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 3/28/16
 * Time: 11:51 AM
 */

namespace Vain\Operation\Collection;

use Vain\Operation\VainOperationInterface;

interface VainOperationCollectionInterface extends VainOperationInterface
{
    /**
     * @param VainOperationInterface $operation
     * 
     * @return VainOperationCollectionInterface
     */
    public function add(VainOperationInterface $operation);
}