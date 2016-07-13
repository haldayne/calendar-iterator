# Haldayne\CalendarIterator
PHP iterators for simple calendar traversal.

## Example

Choose an iterator, construct with your date range, and iterate!

```php
use Haldayne\CalendarIterator\DayIterator;

$days = new DayIterator('today', 'next Monday');
foreach ($days as $day) {
    echo $day;
}
```

A wide selection of iterators:

* `\Haldayne\CalendarIterator\YearIterator`
* `\Haldayne\CalendarIterator\MonthIterator`
* `\Haldayne\CalendarIterator\WeekIterator`
* `\Haldayne\CalendarIterator\DayIterator`
* `\Haldayne\CalendarIterator\HourIterator`
* `\Haldayne\CalendarIterator\MinuteIterator`
* `\Haldayne\CalendarIterator\SecondIterator`

Configure iterators to fit your need:

```php
use Haldayne\CalendarIterator\DayIterator;

$days = new DayIterator('2013-01-01', '2013-12-31');
$days->addExclusion(easter_date(2013));
foreach ($days as $day) {
    echo $day;
}

## Installation with Composer

```
php composer.phar require haldayne/calendar-iterator ^0.1.0
```
