<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 3/31/16
 * Time: 9:38 AM
 */

namespace Vain\Operation\Collection\Logger;

use Vain\Operation\Collection\CollectionInterface;
use Vain\Operation\Result\OperationResultInterface;
use Vain\Operation\OperationInterface;

interface CollectionLoggerInterface
{
    /**
     * @param CollectionInterface $collection
     *
     * @return CollectionLoggerInterface
     */
    public function beforeExecution(CollectionInterface $collection);

    /**
     * @param CollectionInterface $collection
     *
     * @return CollectionLoggerInterface
     */
    public function afterExecution(CollectionInterface $collection, OperationResultInterface $operationResult);

    /**
     * @param OperationInterface $operation
     * @param CollectionInterface $collection
     *
     * @return CollectionLoggerInterface
     */
    public function addOperation(OperationInterface $operation, CollectionInterface $collection);
}