<?php
use Illuminate\Support\Facades\Auth;
use App\Models\Setting;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Carbon;

if (!function_exists('setting')) {
    function setting()
    {
        $setting = Setting::first();
        return $setting;
    }
}