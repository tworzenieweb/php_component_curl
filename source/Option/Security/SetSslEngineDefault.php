<?php

namespace Net\Bazzline\Component\Curl\Option\Security;

use Net\Bazzline\Component\Curl\Option\AbstractSetOptionStringValue;

class SetSslEngineDefault extends AbstractSetOptionStringValue
{
    /**
     * @return int
     */
    public function identifier()
    {
        return CURLOPT_SSLENGINE_DEFAULT;
    }
}