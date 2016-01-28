<?php

namespace rafamalaga86;

class HumanDate
{
    public $date;

    public function __construct($dateString)
    {
        $this->date = date("Y-m-d", strtotime($dateString));
    }

    public function days3Spanish(DateTime $date)
    {
        return $this->spanishLongDate($date);
    }

    public function spanishLongDate(DateTime $date)
    {
        $monthName = $this->getTheMonthInSpanish($date);
        $day = date('d', strtotime($date));
        $year = date('y', strtotime($date));
        $wholeDate = "el $day de $monthName de $year";
        return $wholeDate;
    }

    public function getTheMonthInSpanish(DateTime $date)
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

    public function roundUpDate($date, $daysToRound)
    {
        $day = date('d', strtotime($date));
        $mod = $day % $daysToRound;
        return $roundedDate;
    }

    public function getDate()
    {
        return $this->date;
    }
}

$humanDate = new HumanDate('1991-01-01');
echo $humanDate->getDate();

// echo $ej ;
// echo $date->days3Spanish($ej);
// echo $date->roundUpDate($ej, 2);
