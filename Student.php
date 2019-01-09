<?php
/**
 * Created by PhpStorm.
 * User: Carlo
 * Date: 2019-01-08
 * Time: 9:04 PM
 */

/**
 * Class Student
 */
class Student
{
    /**
     * Student constructor.
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    /**
     * @param $which - specifier for email address to add to
     * @param $address - the email address to add
     */
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    /**
     * @param $grade - the grade to add
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    /**
     * @return float|int - grades average
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }

    /**
     * @return string - text representation for reporting
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}