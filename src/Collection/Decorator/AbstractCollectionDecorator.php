<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/1/16
 * Time: 11:04 AM
 */

namespace Vain\Operation\Collection\Decorator;

use Vain\Operation\Collection\CollectionInterface;
use Vain\Operation\OperationInterface;

class AbstractCollectionDecorator implements CollectionInterface
{
    private $collection;

    /**
     * AbstractVainOperationCollectionDecorator constructor.
     * @param CollectionInterface $collection
     */
    public function __construct(CollectionInterface $collection)
    {
        $this->collection = $collection;
    }

    /**
     * @inheritDoc
     */
    public function add(OperationInterface $operation)
    {
        return $this->collection->add($operation);
    }

    /**
     * @inheritDoc
     */
    public function getId()
    {
        return $this->collection->getId();
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        return $this->collection->execute();
    }
}