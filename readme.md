# Landing helper

This package are helper functions for the proper functioning of dates in landing pages.


## HumanDates static class

This class will handle a date in a human way. At the momment, only in spanish.

The only public method so far is spanishLongDate($date = null, $comma = ',', $of1 = 'de', $of2 = 'de'). The first argument is the date and the next ones are the separators.

Example
```
HumanDate::spanishLongDate('2016-01-01'); // output: "domingo, 3 de Abril de 2016"
```

## LandingDate static class

This class will handle operations regarding dates for landing pages.

The only public method so far is roundUpDate($daysToRound, $date = null). Using the function landingDateSpanish with a argument of days you will get back a date in the near future based in the argument $daysToRound. This day will be the same till this day is reached, when the sum of days will be added again.

Example:
```
echo LandingDate::roundUpDate(3, '2017-01-03')->format('Y-m-d'); // output: "2017-01-06"
echo LandingDate::roundUpDate(3, '2017-01-04')->format('Y-m-d'); // output: "2017-01-06"
echo LandingDate::roundUpDate(3, '2017-01-05')->format('Y-m-d'); // output: "2017-01-06"
echo LandingDate::roundUpDate(3, '2017-01-06')->format('Y-m-d'); // output: "2017-01-09"
echo LandingDate::roundUpDate(3, '2017-01-07')->format('Y-m-d'); // output: "2017-01-09"
echo LandingDate::roundUpDate(3, '2017-01-08')->format('Y-m-d'); // output: "2017-01-09"
echo LandingDate::roundUpDate(3, '2017-01-09')->format('Y-m-d'); // output: "2017-01-12"
```




