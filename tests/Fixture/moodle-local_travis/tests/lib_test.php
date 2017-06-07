<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Simple test to see if PHPUnit is running
 *
 * @package   local_travis
 * @copyright Copyright (c) 2015 Moodlerooms Inc. (http://www.moodlerooms.com)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use local_travis\math;

defined('MOODLE_INTERNAL') || die();

require_once(__DIR__.'/../lib.php');

/**
 * The test
 *
 * @package   local_travis
 * @copyright Copyright (c) 2015 Moodlerooms Inc. (http://www.moodlerooms.com)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class local_travis_lib_testcase extends basic_testcase {
    /**
     * Test addition.
     */
    public function test_local_travis_add() {
        $this->assertEquals(4, local_travis_add(2, 2));
        $this->assertEquals(2, local_travis_add(4, -2));
        $this->assertEquals(0, local_travis_add(-4, 4));
    }

    /**
     * Test subtraction.
     */
    public function test_local_travis_subtract() {
        $this->assertEquals(0, local_travis_subtract(2, 2));
        $this->assertEquals(6, local_travis_subtract(4, -2));
        $this->assertEquals(-8, local_travis_subtract(-4, 4));
    }

    /**
     * Test math class.
     */
    public function test_local_travis_math() {
        $math = new local_travis_math();
        $this->assertEquals(4, $math->add(2, 2));
        $this->assertEquals(2, $math->add(4, -2));
        $this->assertEquals(0, $math->add(-4, 4));
    }

    /**
     * Test math class.
     */
    public function test_local_travis_math_class() {
        $math = new math();
        $this->assertEquals(4, $math->add(2, 2));
        $this->assertEquals(2, $math->add(4, -2));
        $this->assertEquals(0, $math->add(-4, 4));
    }
}