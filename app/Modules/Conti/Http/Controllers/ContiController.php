<?php

namespace App\Modules\Conti\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class ContiController extends Controller
{
    public function index(): JsonResponse
    {
        // Questo è un test. Più avanti collegheremo il database.
        return response()->json([
            'modulo' => 'Conti',
            'stato' => 'attivo',
            'messaggio' => 'Il routing modulare funziona.'
        ]);
    }
}