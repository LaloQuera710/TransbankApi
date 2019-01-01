<?php

namespace DarkGhostHunter\TransbankApi\Clients\Webpay\Concerns;

use DarkGhostHunter\TransbankApi\Helpers\Fluent;

/**
 * Trait RetrievesResults
 *
 * @package DarkGhostHunter\TransbankApi\Clients\Webpay\Concerns
 *
 * @mixin \DarkGhostHunter\TransbankApi\Clients\Webpay\WebpayClient
 */
trait RetrievesResults
{
    /**
     * Returns the WebpayClient results
     *
     * @param string $transaction
     * @return array
     */
    public function retrieve(string $transaction)
    {
        return (array)($this->connector->getTransactionResult(
            new Fluent([
                'tokenInput' => $transaction
            ])
        ))->return;
    }
}
