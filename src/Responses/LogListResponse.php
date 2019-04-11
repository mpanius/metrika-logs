<?php

declare(strict_types=1);

namespace Volga\MetrikaLogs\Responses;

use JMS\Serializer\Annotation as JMS;

/**
 * Class LogListResponse
 *
 * @package Volga\MetrikaLogs\Responses
 */
class LogListResponse
{
    /**
     * Запросы
     *
     * @JMS\Type("array<Volga\MetrikaLogs\Responses\Types\LogRequest>")
     *
     * @var array
     */
    protected $requests = [];

    /**
     * Ошибки
     *
     * @JMS\Type("array<Volga\MetrikaLogs\Responses\Types\Error>")
     *
     * @var array
     */
    protected $errors = [];

    /**
     * HTTP-статус ошибки
     *
     * @JMS\SerializedName("code")
     * @JMS\Type("string")
     *
     * @var null|string
     */
    protected $error_code;

    /**
     * Причина ошибки
     *
     * @JMS\SerializedName("message")
     * @JMS\Type("string")
     *
     * @var null|string
     */
    protected $error_message;

    /**
     * Есть ли ошибки?
     *
     * @return bool
     */
    public function hasErrors(): bool
    {
        return !empty($this->errors);
    }

    /**
     * Ошибки
     *
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * HTTP-статус ошибки
     *
     * @return null|string
     */
    public function getErrorCode(): ?string
    {
        return $this->error_code;
    }

    /**
     * Причина ошибки
     *
     * @return null|string
     */
    public function getErrorMessage(): ?string
    {
        return $this->error_message;
    }

    /**
     * Есть ли запросы?
     *
     * @return bool
     */
    public function hasRequests(): bool
    {
        return !empty($this->requests);
    }

    /**
     * Запросы
     *
     * @return array
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}
