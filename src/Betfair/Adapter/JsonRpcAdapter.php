<?php
/**
 * This file is part of the Betfair library.
 *
 * (c) Daniele D'Angeli <dangeli88.daniele@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Betfair\Adapter;

class JsonRpcAdapter implements AdapterInterface
{
    public function adaptResponse($response)
    {
        $data = json_decode($response, true);
        $result = json_encode($data[0]['result']);
        return $result;
    }
}
