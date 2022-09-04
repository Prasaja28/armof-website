<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Settings;

function getSettings($key = null)
{
    if (empty(session('settings'))) {
        $settings = reStoreSettings();
    }
    $settings = session('settings');
    return $settings[$key] ?? null;
}

function reStoreSettings()
{
    $settings = Settings::select('*')
        ->whereNotNull('value')
        ->get()
        ->pluck('value', 'key')
        ->toArray();
    session()->put('settings', $settings);
}
