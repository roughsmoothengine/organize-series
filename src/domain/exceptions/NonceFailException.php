<?php
namespace OrganizeSeries\domain\exceptions;

use Exception;
use InvalidArgumentException;

class NonceFailException extends InvalidArgumentException
{
    /**
     * NonceFailException constructor.
     *
     * @param string $message
     * @param string $code
     * @param Exception|null   $previous
     */
    public function __construct($message = '', $code = '', $previous = null) {
        if ($message === '') {
            $message = esc_html__(
                'Nonce fail.',
                'organize-series'
            );
        }
        parent::__construct($message, $code, $previous);
    }
}