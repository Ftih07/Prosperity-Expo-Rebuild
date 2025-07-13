<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        // Handle 404 Not Found
        $this->renderable(function (NotFoundHttpException $e, $request) {
            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'Halaman tidak ditemukan.',
                    'code' => 404
                ], 404);
            }

            return response()->view('errors.404', [], 404);
        });

        // Handle 503 Service Unavailable (e.g. maintenance mode)
        $this->renderable(function (Throwable $e, $request) {
            if ($e instanceof HttpExceptionInterface && $e->getStatusCode() === 503) {
                return response()->view('errors.503', [], 503);
            }
        });

        // Handle 500 Internal Server Error
        $this->renderable(function (Throwable $e, $request) {
            if (
                !$e instanceof HttpExceptionInterface &&
                !($e instanceof NotFoundHttpException)
            ) {
                if ($request->expectsJson()) {
                    return response()->json([
                        'message' => 'Terjadi kesalahan pada server.',
                        'code' => 500
                    ], 500);
                }

                return response()->view('errors.500', ['exception' => $e], 500);
            }
        });
    }
}
