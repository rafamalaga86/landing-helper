<?php

class LandingDates {

	public function days3Spanish(){
		echo date('Y-m-d');
		return $this->spanishLongDate(date('Y-m-d'));
	}

	public function spanishLongDate($date){

		$monthName = $this->getTheMonthInSpanish(date('m', strtotime($date)));

		$wholeDate = $monthName;

		return $wholeDate;
	}

	private function getTheMonthInSpanish($month){

		if ($month < 1)
			$month = 1;
		elseif ($month > 12)
			$month = 12;

		switch ($month) {
			case 1: $string = "Enero" ;break;
			case 2: $string = "Febrero" ;break;
			case 3: $string = "Marzo" ;break;
			case 4: $string = "Abril" ;break;
			case 5: $string = "Mayo" ;break;
			case 6: $string = "Junio" ;break;
			case 7: $string = "Julio" ;break;
			case 8: $string = "Agosto" ;break;
			case 9: $string = "Septiembre" ;break;
			case 10: $string = "Octubre" ;break;
			case 11: $string = "Noviembre" ;break;
			case 12: $string = "Diciembre" ;break;
			default: $string = "Diciembre" ;break;
		}

		return $string;
	}

}

$date = new LandingDates;
echo $date->days3Spanish();