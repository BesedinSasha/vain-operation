<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 3/28/16
 * Time: 11:51 AM
 */

namespace Vain\Operation\Collection;

use Vain\Operation\OperationInterface;

interface CollectionInterface extends OperationInterface
{
    /**
     * @param OperationInterface $operation
     * 
     * @return CollectionInterface
     */
    public function add(OperationInterface $operation);
}