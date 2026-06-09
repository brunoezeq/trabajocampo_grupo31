php app\Services\ValidationException.php
<?php namespace App\Services;

class ValidationException extends \Exception
{
    protected $errors = [];

    public function __construct(array $errors, string $message = 'Errores de validación', int $code = 422, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->errors = $errors;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }
}