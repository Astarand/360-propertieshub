<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class RecaptchaService
{
    private $secretKey;
    private $siteKey;

    public function __construct()
    {
        $this->secretKey = env('RECAPTCHA_SECRET_KEY');
        $this->siteKey = env('RECAPTCHA_SITE_KEY');
    }

    public function verify($token, $action = null, $minScore = 0.5)
    {
        if (empty($this->secretKey) || empty($token)) {
            Log::warning('reCAPTCHA verification failed: Missing secret key or token');
            return false;
        }

        try {
            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => $this->secretKey,
                'response' => $token,
                'remoteip' => request()->ip()
            ]);

            $result = $response->json();

            if (!$result['success']) {
                Log::warning('reCAPTCHA verification failed', [
                    'errors' => $result['error-codes'] ?? [],
                    'action' => $action
                ]);
                return false;
            }

            // Check score for v3
            if (isset($result['score']) && $result['score'] < $minScore) {
                Log::warning('reCAPTCHA score too low', [
                    'score' => $result['score'],
                    'min_score' => $minScore,
                    'action' => $action
                ]);
                return false;
            }

            // Check action if provided
            if ($action && isset($result['action']) && $result['action'] !== $action) {
                Log::warning('reCAPTCHA action mismatch', [
                    'expected' => $action,
                    'received' => $result['action']
                ]);
                return false;
            }

            return true;

        } catch (\Exception $e) {
            Log::error('reCAPTCHA verification error: ' . $e->getMessage());
            return false;
        }
    }

    public function getSiteKey()
    {
        return $this->siteKey;
    }
}