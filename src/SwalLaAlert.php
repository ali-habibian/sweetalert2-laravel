<?php

namespace AliHabibian\Sweetalert2Laravel;

class SwalLaAlert
{
    public static function flash($type, $message)
    {
        // Flash the alert to the session
        session()->flash('swalalert', [
            'type' => $type,
            'message' => $message
        ]);
    }
}