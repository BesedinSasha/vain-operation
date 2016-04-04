<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/1/16
 * Time: 11:06 AM
 */

namespace Vain\Operation\Collection\Decorator\Logger;


use Vain\Operation\Collection\Decorator\AbstractCollectionDecorator;
use Vain\Operation\Collection\Logger\CollectionLoggerInterface;
use Vain\Operation\Collection\CollectionInterface;
use Vain\Operation\OperationInterface;

class LoggerCollectionDecorator extends AbstractCollectionDecorator
{
    
    private $logger;

    /**
     * VainOperationCollectionLoggerDecorator constructor.
     * @param CollectionLoggerInterface $logger
     * @param CollectionInterface $collection
     */
    public function __construct(CollectionLoggerInterface $logger, CollectionInterface $collection)
    {
        $this->logger = $logger;
        parent::__construct($collection);
    }

    /**
     * @inheritDoc
     */
    public function add(OperationInterface $operation)
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