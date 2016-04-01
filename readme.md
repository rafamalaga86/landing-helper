# Landing helper

This package are helper functions for the proper functioning of the landing pages.


## HumanDates class

This class will handle a date in a human way. At the momment, only in spanish. Using the function landingDateSpanish with a argument of days you will get back a date in the near future. This day will be the same till this day is reached, when the sum of dates will be added.

Example:
```
$humanDate = new HumanDate('2016-02-03');
echo $humanDate->landingDateSpanish(3);
```
Response:
sábado, 6 de Febrero de 2016


Example:
```
$humanDate = new HumanDate('2016-02-04');
echo $humanDate->landingDateSpanish(3);
```
Response:
sábado, 6 de Febrero de 2016


Example:
```
$humanDate = new HumanDate('2016-02-05');
echo $humanDate->landingDateSpanish(3);
```
Response:
sábado, 6 de Febrero de 2016


Example:
```
$humanDate = new HumanDate('2016-02-06');
echo $humanDate->landingDateSpanish(3);
```
Response:
sábado, 9 de Febrero de 2016

Example:
```
$humanDate = new HumanDate('2016-02-07');
echo $humanDate->landingDateSpanish(3);
```
Response:
sábado, 9 de Febrero de 2016