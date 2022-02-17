<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Log;

class Helper
{

    public static function addLog(\Exception $exception, $data = [])
    {
        $log = "\n";
        $log .= 'File: ' . json_encode($exception->getFile());
        $log .= "\n";
        $log .= 'Code: ' . json_encode($exception->getCode());
        $log .= "\n";
        $log .= 'Line: ' . json_encode($exception->getLine());
        $log .= "\n";
        $log .= 'Message: ' . json_encode($exception->getMessage());
        if (count($data) > 0) {
            $log .= "\n";
            $log .= 'Data: ' . json_encode($data);
        }
        $log .= "\n\r";
        Log::error($log);
    }

    public function mapRequest(): array
    {
        
        return [];
    }
}
