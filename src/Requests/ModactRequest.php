<?php

namespace Tourvisor\Requests;

/**
 * Class ModactDetailRequest
 *
 * @package Modact\Requests
 * @property int $tourid - идентификатор тура
 */
class ModactRequest extends AbstractRequest
{
    protected $endPoint = 'modact.php';

    protected $requiredParams = ['tourid'];
}