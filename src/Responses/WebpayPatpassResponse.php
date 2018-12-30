<?php

namespace DarkGhostHunter\TransbankApi\Responses;

class WebpayPatpassResponse extends AbstractResponse
{
    /**
     * Detect if the Result was successful or not
     *
     * @return void
     */
    public function setStatus()
    {
        switch (true) {
            case !!$this->token:
                $this->isSuccess = true;
                break;
            case !!$this->detailOutput:
                $this->isSuccess = $this->detailOutput->responseCode === 0;
                break;
        }
    }
}