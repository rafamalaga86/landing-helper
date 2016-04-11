<?php

namespace Rafamalaga86\LandingHelper;

use \DateTime;

class LandingDate
{
    public static function roundUpDate($daysToRound, $date = null)
    {
        if (is_string($date) || $date === null) {
            $date = new DateTime($date);
        }

        $day = $date->format('d');
        $resultDay = $daysToRound - ($day % $daysToRound);

        if ($resultDay === 0) {
            $date->modify("+$daysToRound day");
        } else {
            $date->modify("+$resultDay day");
        }

        return $date;
    }
}
