<?php

namespace App\Exceptions;

//use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
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
     *
     * @return void
     */
    //Centraliza todos os logs não tratados diretamente nas classes (try catch)
    public function register()
    {
        //Registra os logs e trata no banco ou algum aplicação de centralização de logs
        $this->reportable(function (Throwable $e) //Throwble centraliza todos os erros e falhas
        {
            //Log::withContext(['url' => request()->fullUrl()]);
        });

        //Apresenta as mensagens de logs para o usuário
        $this->renderable(function (Throwable $e, Request $request)
        {
                //return response()->view('errors.404-custom', [], 404);
            //Verifica se é uma requisição API, neste caso retorna Json
            if($request->expectsJson())
            {
                return response()->json(['message' => $e->getMessage()]);
            }
            else
            {
                return response()->view('errors.error',['exception' => $e, 'msg' => ' Não foi possível concluir a solicitação, contate o Administrador!']);
            }
        });
    }


}
