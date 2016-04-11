<?php

namespace Rafamalaga86\LandingHelper;

use \DateTime;

class HumanDate
{
    protected static function getTheMonthInSpanish(DateTime $date)
    {
        $month = $date->format('m');

        if ($month < 1) {
            $month = 1;
        } elseif ($month > 12) {
            $month = 12;
        }

        switch ($month) {

            case 1:
                $string = "Enero";
                break;

            case 2:
                $string = "Febrero";
                break;

            case 3:
                $string = "Marzo";
                break;

            case 4:
                $string = "Abril";
                break;

            case 5:
                $string = "Mayo";
                break;

            case 6:
                $string = "Junio";
                break;

            case 7:
                $string = "Julio";
                break;

            case 8:
                $string = "Agosto";
                break;

            case 9:
                $string = "Septiembre";
                break;

            case 10:
                $string = "Octubre";
                break;

            case 11:
                $string = "Noviembre";
                break;

            case 12:
                $string = "Diciembre";
                break;

            default:
                $string = "Diciembre";
                break;
        }

        return $string;
    }

    protected static function getTheDayOfWeekInSpanish(DateTime $date)
    {
        $dayOfWeek = $date->format('D');

        switch ($dayOfWeek) {

            case 'Mon':
                $string = "lunes";
                break;

            case 'Tue':
                $string = "martes";
                break;

            case 'Wed':
                $string = "miércoles";
                break;

            case 'Thu':
                $string = "jueves";
                break;

            case 'Fri':
                $string = "viernes";
                break;

            case 'Sat':
                $string = "sábado";
                break;

            case 'Sun':
                $string = "domingo";
                break;

            default:
                $string = "lunes";
                break;
        }

        return $string;
    }

    /**
     * Format the date into a human way of it
     * @param DateTime|string|null $inputDate
     * @param string First separator
     * @param string Second separator
     * @param string Third separator
     */
    public static function spanishLongDate($date = null, $comma = ',', $of1 = 'de', $of2 = 'de')
    {
        if (is_string($date) || $date === null) {
            $date = new DateTime($date);
        }

        $dayOfWeek = self::getTheDayOfWeekInSpanish($date);
        $monthName = self::getTheMonthInSpanish($date);
        $day = $date->format('j'); // Days without Zero
        $year = $date->format('Y');
        $wholeDate = "$dayOfWeek$comma $day $of1 $monthName $of2 $year";

        return $wholeDate;
    }
}
