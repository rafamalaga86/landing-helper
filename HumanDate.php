<?php

namespace Rafamalaga86\LandingHelper;

use \DateTime;

class HumanDate
{
    /**
     * @var null|Datetime
     */
    protected $date;

    public function __construct($dateString = null)
    {
        $this->date = new DateTime($dateString);
    }

    protected function roundUpDate(DateTime $date, $daysToRound)
    {
        $day = $date->format('d');
        $resultDay = $daysToRound - ($day % $daysToRound);

        if ($resultDay === 0) {
            $date->modify("+$daysToRound day");
        } else {
            $date->modify("+$resultDay day");
        }

        return $date;
    }

    protected function getTheMonthInSpanish(DateTime $date)
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

    protected function getTheDayOfWeekInSpanish(DateTime $date)
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

    public function landingDateSpanish()
    {
        // $roundedDate = $this->roundUpDate($this->date, $days);
        return $this->spanishLongDate(',', 'de', 'de');
    }

    public function spanishLongDate($comma = ',', $of1 = 'de', $of2 = 'de')
    {
        $date = $this->date;
        $dayOfWeek = $this->getTheDayOfWeekInSpanish($date);
        $monthName = $this->getTheMonthInSpanish($date);
        $day = $date->format('j'); // Days without Zero
        $year = $date->format('Y');
        $wholeDate = "$dayOfWeek$comma $day $of1 $monthName $of2 $year";

        return $wholeDate;
    }

    // Getters

    public function getDate()
    {
        return $this->date;
    }
}
