<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class BaseApiController extends Controller
{
    protected function successResponse($message, $data = null, $status = 200)
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data' => $data
        ], $status);
    }

    protected function errorResponse($message, $status = 400, $data = null)
    {
        return response()->json([
            'success' => false,
            'message' => $message,
            'data' => $data
        ], $status);
    }
}