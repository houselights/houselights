<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

class ValidateCaptcha
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     * @throws ValidationException
     */
    public function handle(Request $request, Closure $next): Response
    {
        $validator = Validator::make($request->all(), ['captcha' => 'required|captcha']);
        if ($validator->fails()) {
            throw ValidationException::withMessages([
                'captcha' => ['invalid captcha'],
            ]);
        }
        return $next($request);
    }
}
