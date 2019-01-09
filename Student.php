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
}