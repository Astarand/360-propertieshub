<?php

namespace App\Rules;

use App\Services\RecaptchaService;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class RecaptchaRule implements ValidationRule
{
    protected $action;
    protected $minScore;

    public function __construct($action = null, $minScore = 0.5)
    {
        $this->action = $action;
        $this->minScore = $minScore;
    }

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $recaptchaService = app(RecaptchaService::class);
        
        if (!$recaptchaService->verify($value, $this->action, $this->minScore)) {
            $fail('reCAPTCHA verification failed. Please try again.');
        }
    }
}
