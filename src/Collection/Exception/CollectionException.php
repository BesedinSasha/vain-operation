<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 3/31/16
 * Time: 9:56 AM
 */

namespace Vain\Operation\Collection\Exception;

use Vain\Operation\Collection\CollectionInterface;
use Vain\Operation\Exception\OperationException;

class CollectionException extends OperationException
{
    private $collection;

    /**
     * VainOperationCollectionException constructor.
     * @param CollectionInterface $collection
     * @param string $message
     * @param int $code
     * @param \Exception $previous
     */
    public function __construct(CollectionInterface $collection, $message, $code, \Exception $previous = null)
    {
        $this->collection = $collection;
        parent::__construct($collection, $message, $code, $previous);
    }

    /**
     * @return CollectionInterface
     */
    public function getCollection()
    {
        return $this->collection;
    }
}