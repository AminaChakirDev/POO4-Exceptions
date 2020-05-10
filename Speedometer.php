<?php


class Speedometer
{
    const CONVERT = 1.60934;

    public static function KmToMiles($km)
    {
        $miles = $km / self::CONVERT;
        return round($miles,2);
    }

    public static function MilesToKm($miles)
    {
        $km = $miles * self::CONVERT;
        return round($km,2);
    }
}

