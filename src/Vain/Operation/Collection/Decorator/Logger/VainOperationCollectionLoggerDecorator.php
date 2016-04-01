<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/1/16
 * Time: 11:06 AM
 */

namespace Vain\Operation\Collection\Decorator\Logger;


use Vain\Operation\Collection\Decorator\AbstractVainOperationCollectionDecorator;
use Vain\Operation\Collection\Logger\VainOperationCollectionLoggerInterface;
use Vain\Operation\Collection\VainOperationCollectionInterface;
use Vain\Operation\VainOperationInterface;

class VainOperationCollectionLoggerDecorator extends AbstractVainOperationCollectionDecorator
{
    
    private $logger;

    /**
     * VainOperationCollectionLoggerDecorator constructor.
     * @param VainOperationCollectionLoggerInterface $logger
     * @param VainOperationCollectionInterface $collection
     */
    public function __construct(VainOperationCollectionLoggerInterface $logger, VainOperationCollectionInterface $collection)
    {
        $this->logger = $logger;
        parent::__construct($collection);
    }

    /**
     * @inheritDoc
     */
    public function add(VainOperationInterface $operation)
    {
        $this->logger->addOperation($operation, $this);
        
        return parent::add($operation);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        $this->logger->beforeExecution($this);
        $result = parent::execute();
        $this->logger->afterExecution($this, $result);
        
        return $result;
    }
}