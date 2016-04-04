<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 3/31/16
 * Time: 9:51 AM
 */

namespace Vain\Operation\Result\Successful;


use Vain\Operation\Result\AbstractVainOperationResult;

class VainSuccessfulOperationResult extends AbstractVainOperationResult
{
    public function __construct()
    {
        parent::__construct(true);
    }
}