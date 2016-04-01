<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 3/31/16
 * Time: 9:56 AM
 */

namespace Vain\Operation\Collection\Exception;


use Vain\Core\Exception\VainCoreException;
use Vain\Operation\Collection\VainOperationCollectionInterface;

class VainOperationCollectionException extends VainCoreException
{
    private $collection;

    /**
     * VainOperationCollectionException constructor.
     * @param VainOperationCollectionInterface $collection
     * @param string $message
     * @param int $code
     */
    public function __construct(VainOperationCollectionInterface $collection, $message, $code)
    {
        $this->collection = $collection;
        parent::__construct($message, $code);
    }
}