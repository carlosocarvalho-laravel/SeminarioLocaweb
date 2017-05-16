<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Http\Request;

$app->get('/', function() use ($app) {
    
    if (! Session::has('nickname')) {
        return view('login');
    }

    //Caso seja rodado no localhost:8000, por exemplo
    //retira os : do nome do servidor
    $md5 = md5(Session::getId());

    if (! \Cache::has($md5)) {
        return view('login');
    }

    $mode = Session::get('mode');
    $host = $_SERVER['HTTP_HOST'];
    $hostExplode = explode(':', $host);
    $host = $hostExplode[0];

    $websocketsAddress = 'node79991-seminario-phpsp.jelasticlw.com.br:11006?session=' . $md5;

    if (strpos($host, 'jelasticlw') === false) {
        $websocketsAddress = $host . ':7888?session=' . $md5;
    }
   
   
    $data = [
        'host' => $_SERVER['HTTP_HOST'],
        'mode' => $mode,
        'websocketsAddress' => $websocketsAddress
    ];

    return view('talks', $data);
});

$app->get('/logout', function(){
       Session::flush();
       return redirect('/');
});

$app->post('/', function(Request $request) use ($app) {
    //O usuário é 'admin@admin.com.br' e a senha é 'phprules'?
  

    if ('admin@admin.com.br' === $request->input('mail') && '27da247ac3132070bfe88338846955adf41955fc' === sha1($request->input('pass'))) {
        $md5 = md5(Session::getId());

        //Grava na sessão que o visitante é o apresentador
        Session::put('mode', 'presenter');
        Session::put('name', $request->input('name'));
        Session::put('nickname', 'admin@admin.com.br');

        if (! \Cache::has($md5)) {
            $cache = [];
            $cache['mode'] = 'presenter';
            $cache['name'] = $request->input('name');
            $cache['nickname'] = 'admin@admin.com.br';

            \Cache::forever($md5, $cache);
        }
    } else {
        $md5 = md5(Session::getId());

        Session::put('mode', 'participant');
        Session::put('name', $request->input('name'));
        Session::put('nickname', $request->input('mail'));

        if (! \Cache::has($md5)) {
            $cache = [];
            $cache['mode'] = 'participant';
            $cache['name'] = $request->input('name');
            $cache['nickname'] = $request->input('mail');

            \Cache::forever($md5, $cache);
        }
    }

    return redirect('/');
});
