<?php

namespace php\helpers;

use DateTime;
use DateTimeZone;

class DateHelper extends DateTime{

    /**
     * @param string $date
     * @param string $timeZone
     * @return static
     */
    public static function get($date = 'now', $timeZone = 'europe/moscow') {
        return new static($date, new DateTimeZone($timeZone));
    }

    /**
     * @param string $format
     * @return string
     */
    public function toString($format = 'Y-m-d H-i-s') {
        return $this->format($format);
    }

    /**
     * @param string $format
     * @param string $timeZone
     * @return mixed
     */
    public static function nowString($format = 'Y-m-d H-i-s', $timeZone = 'europe/moscow') {
        return (new static('now', $timeZone))->toString($format);
    }

    /**
     * @param bool $clone
     * @return DateHelper
     */
    public function tomorrow($clone = false) {
        return $this->changeDate($clone ? clone $this : $this, '+1 DAY');
    }

    /**
     * @param bool $clone
     * @return DateHelper
     */
    public function yesterday($clone = false) {
        return $this->changeDate($clone ? clone $this : $this, '-1 DAY');
    }

    /**
     * @param bool $clone
     * @param int $count
     * @return DateHelper
     */
    public function plusMonth($clone = false, $count = 1) {
        return $this->changeDate($clone ? clone $this : $this, '+'.((int) $count).' MONTH');
    }
    /**
     * @param bool $clone
     * @param int $count
     * @return DateHelper
     */
    public function minusMonth($clone = false, $count = 1) {
        return $this->changeDate($clone ? clone $this : $this, '-'.((int) $count).' MONTH');
    }
    /**
     * @param bool $clone
     * @param int $count
     * @return DateHelper
     */
    public function plusYear($clone = false, $count = 1) {
        return $this->changeDate($clone ? clone $this : $this, '+'.((int) $count).' YEAR');
    }
    /**
     * @param bool $clone
     * @param int $count
     * @return DateHelper
     */
    public function minusYear($clone = false, $count = 1) {
        return $this->changeDate($clone ? clone $this : $this, '-'.((int) $count).' YEAR');
    }

    /**
     * @param bool $clone
     * @return DateHelper
     */
    public function lastDayOfMonth($clone = false) {
        return $this->changeDate($clone ? clone $this : $this, 'last day of this month');
    }

    /**
     * @param static $object
     * @param $modificator
     * @return static
     */
    private function changeDate(&$object, $modificator) {
        $object->modify($modificator);
        return $object;
    }
}