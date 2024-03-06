<?php

namespace App\Exceptions;

use Throwable;
use App\Models\Subcate;
use FontLib\Table\Type\head;
use Illuminate\Support\Facades\Route;
use Mockery\Exception\InvalidOrderException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
     public function register()
    {

      $this->renderable(function (NotFoundHttpException $e, $request) {

            $head = Subcate::all();
          return response()->view('errors.404',compact('head'),404);
      });
    }

    public function render($request, Throwable $exception)
    {
      if ($exception instanceof HttpException) {
          if ($exception->getStatusCode() === 500) {
              abort(404);
          }
         } elseif ($exception instanceof \ErrorException) {
          abort(404);
         }

        return parent::render($request, $exception);
    }
}
