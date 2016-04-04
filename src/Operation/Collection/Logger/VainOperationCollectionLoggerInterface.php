<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 3/31/16
 * Time: 9:38 AM
 */

namespace Vain\Operation\Collection\Logger;

use Vain\Operation\Collection\VainOperationCollectionInterface;
use Vain\Operation\Result\VainOperationResultInterface;
use Vain\Operation\VainOperationInterface;

interface VainOperationCollectionLoggerInterface
{
    /**
     * @param VainOperationCollectionInterface $collection
     *
     * @return VainOperationCollectionLoggerInterface
     */
    public function beforeExecution(VainOperationCollectionInterface $collection);

    /**
     * @param VainOperationCollectionInterface $collection
     *
     * @return VainOperationCollectionLoggerInterface
     */
    public function afterExecution(VainOperationCollectionInterface $collection, VainOperationResultInterface $operationResult);

    /**
     * @param VainOperationInterface $operation
     * @param VainOperationCollectionInterface $collection
     *
     * @return VainOperationCollectionLoggerInterface
     */
    public function addOperation(VainOperationInterface $operation, VainOperationCollectionInterface $collection);
}