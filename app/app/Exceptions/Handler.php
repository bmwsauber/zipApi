<?php

namespace App\Exceptions;

use http\Exception\BadQueryStringException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Throwable
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        /**
         * 404
         */
        if ($exception instanceof NotFoundHttpException) {
            $response = collect([
                'status' => 'error',
                'message' => 'Page not found.',
            ]);
            return response()->json($response, 404, [], JSON_PRETTY_PRINT);
        }

        /**
         * not valid data
         */
        if ($exception instanceof ValidationException) {
            $response = collect([
                'status' => 'error',
                'message' => $exception->getMessage(),
            ]);
            return response()->json($response, 422, [], JSON_PRETTY_PRINT);
        }
        return parent::render($request, $exception);
    }
}
