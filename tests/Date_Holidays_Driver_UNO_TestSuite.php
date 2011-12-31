<?php
/**
 * TestSuite for UNO Holidays
 *
 * PHP Version 4
 *
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */

/** Set up the environment */
require_once dirname(__FILE__) . '/helper.inc';

/**
 * Date_Holidays_Driver_UNO_TestSuite
 *
 * @category Date
 * @package  Date_Holidays
 * @subpackage Test
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @uses PHPUnit_Framework_TestCase
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_UNO_TestSuite extends PHPUnit_Framework_TestCase
{

    /**
     * setup
     *
     * @access public
     * @return void
     */
    function setUp()
    {
        $this->testDates2005 = array(
                'leprosyDay' => array ('day' => 28,
                    'month' => 1,
                    'year' => 2005),
                'nativeTongueDay' => array ('day' => 21,
                    'month' => 2,
                    'year' => 2005),
                'womensDay' => array ('day' => 8,
                    'month' => 3,
                    'year' => 2005),
                'worldConsumersDay' => array ('day' => 15,
                    'month' => 3,
                    'year' => 2005),
                'intForestDay' => array ('day' => 21,
                    'month' => 3,
                    'year' => 2005),
                'intDayBeatingRacism' => array ('day' => 21,
                    'month' => 3,
                    'year' => 2005),
                'dayOfPoesy' => array ('day' => 21,
                    'month' => 3,
                    'year' => 2005),
                'dayOfWater' => array ('day' => 22,
                    'month' => 3,
                    'year' => 2005),
                'meteorologyDay' => array ('day' => 23,
                    'month' => 3,
                    'year' => 2005),
                'tuberculosisDay' => array ('day' => 24,
                    'month' => 3,
                    'year' => 2005),
                'worldsHealthDay' => array ('day' => 7,
                    'month' => 4,
                    'year' => 2005),
                'bookAndCopyrightDay' => array ('day' => 23,
                    'month' => 4,
                    'year' => 2005),
                'treesDay' => array ('day' => 25,
                    'month' => 4,
                    'year' => 2005),
                'intellectualPropertyDay' => array ('day' => 26,
                    'month' => 4,
                    'year' => 2005),
                'intDayOfWork' => array ('day' => 1,
                    'month' => 5,
                    'year' => 2005),
                'freedomOfPressDay' => array ('day' => 3,
                    'month' => 5,
                    'year' => 2005),
                'dayOfTheSun' => array ('day' => 3,
                    'month' => 5,
                    'year' => 2005),
                'intFamilyDay' => array ('day' => 15,
                    'month' => 5,
                    'year' => 2005),
                'telecommunicationsDay' => array ('day' => 17,
                    'month' => 5,
                    'year' => 2005),
                'culturalDevelopmentDay' => array ('day' => 21,
                    'month' => 5,
                    'year' => 2005),
                'biologicalDiversityDay' => array ('day' => 22,
                    'month' => 5,
                    'year' => 2005),
                'africanLiberationDay' => array ('day' => 25,
                    'month' => 5,
                    'year' => 2005),
                'unPeaceSquadsDay' => array ('day' => 29,
                    'month' => 5,
                    'year' => 2005),
                'nonsmokersDay' => array ('day' => 31,
                    'month' => 5,
                    'year' => 2005),
                'farmersDay' => array ('day' => 1,
                    'month' => 6,
                    'year' => 2005),
                'environmentDay' => array ('day' => 5,
                    'month' => 6,
                    'year' => 2005),
                'africanChildrenDay' => array ('day' => 16,
                    'month' => 6,
                    'year' => 2005),
                'desertDay' => array ('day' => 17,
                    'month' => 6,
                    'year' => 2005),
                'africanFugitiveDay' => array ('day' => 20,
                    'month' => 6,
                    'year' => 2005),
                'antiDrugsDay' => array ('day' => 26,
                    'month' => 6,
                    'year' => 2005),
                'intCoopDay' => array ('day' => 2,
                    'month' => 7,
                    'year' => 2005),
                'habitatDay' => array ('day' => 2,
                    'month' => 7,
                    'year' => 2005),
                'populationDay' => array ('day' => 11,
                    'month' => 7,
                    'year' => 2005),
                'indigenousPeopleDay' => array ('day' => 9,
                    'month' => 8,
                    'year' => 2005),
                'intYouthDay' => array ('day' => 12,
                    'month' => 8,
                    'year' => 2005),
                'slaveTradeDay' => array ('day' => 23,
                    'month' => 8,
                    'year' => 2005),
                'alphabetizationDay' => array ('day' => 8,
                    'month' => 9,
                    'year' => 2005),
                'ozoneLayerProtectionDay' => array ('day' => 16,
                    'month' => 9,
                    'year' => 2005),
                'intPeaceDay' => array ('day' => 20,
                    'month' => 9,
                    'year' => 2005),
                'tourismDay' => array ('day' => 27,
                    'month' => 9,
                    'year' => 2005),
                'intFugitiveDay' => array ('day' => 28,
                    'month' => 9,
                    'year' => 2005),
                'agedPeopleDay' => array ('day' => 1,
                    'month' => 10,
                    'year' => 2005),
                'animalsDay' => array ('day' => 4,
                    'month' => 10,
                    'year' => 2005),
                'outerSpaceWeek' => array ('day' => 4,
                    'month' => 10,
                    'year' => 2005),
                'teachersDay' => array ('day' => 5,
                    'month' => 10,
                    'year' => 2005),
                'postAssociationDay' => array ('day' => 9,
                    'month' => 10,
                    'year' => 2005),
                'sanityDay' => array ('day' => 10,
                    'month' => 10,
                    'year' => 2005),
                'nourishmentDay' => array ('day' => 16,
                    'month' => 10,
                    'year' => 2005),
                'povertyRemovalDay' => array ('day' => 17,
                    'month' => 10,
                    'year' => 2005),
                'unitedNationsDay' => array ('day' => 24,
                    'month' => 10,
                    'year' => 2005),
                'evolvementInfoDay' => array ('day' => 24,
                    'month' => 10,
                    'year' => 2005),
                'evolvementInfoDay' => array ('day' => 24,
                    'month' => 10,
                    'year' => 2005),
                'environmentalExploitationDay' => array ('day' => 6,
                    'month' => 11,
                    'year' => 2005),
                'toleranceDay' => array ('day' => 16,
                    'month' => 11,
                    'year' => 2005),
                'africanIndustrializationDay' => array ('day' => 20,
                    'month' => 11,
                    'year' => 2005),
                'worldChildrenDay' => array ('day' => 20,
                    'month' => 11,
                    'year' => 2005),
                'televisionDay' => array ('day' => 21,
                    'month' => 11,
                    'year' => 2005),
                'noViolenceAgainstWomen' => array ('day' => 25,
                    'month' => 11,
                    'year' => 2005),
                'palestinianSolidarity' => array ('day' => 29,
                    'month' => 11,
                    'year' => 2005),
                'worldAidsDay' => array ('day' => 1,
                    'month' => 12,
                    'year' => 2005),
                'againstSlaveryDay' => array ('day' => 1,
                    'month' => 12,
                    'year' => 2005),
                'disabledPeopleDay' => array ('day' => 3,
                    'month' => 12,
                    'year' => 2005),
                'evolvementHelperDay' => array ('day' => 5,
                    'month' => 12,
                    'year' => 2005),
                'civilAeronauticsDay' => array ('day' => 7,
                    'month' => 12,
                    'year' => 2005),
                'humanRightsDay' => array ('day' => 10,
                    'month' => 12,
                    'year' => 2005),
                'unicefDay' => array ('day' => 11,
                    'month' => 12,
                    'year' => 2005),
                'migrantsDay' => array ('day' => 18,
                    'month' => 12,
                    'year' => 2005),
                );

        $this->testDates2006 = array(
                'leprosyDay' => array ('day' => 28,
                    'month' => 1,
                    'year' => 2006),
                'nativeTongueDay' => array ('day' => 21,
                    'month' => 2,
                    'year' => 2006),
                'womensDay' => array ('day' => 8,
                    'month' => 3,
                    'year' => 2006),
                'worldConsumersDay' => array ('day' => 15,
                    'month' => 3,
                    'year' => 2006),
                'intForestDay' => array ('day' => 21,
                    'month' => 3,
                    'year' => 2006),
                'intDayBeatingRacism' => array ('day' => 21,
                    'month' => 3,
                    'year' => 2006),
                'dayOfPoesy' => array ('day' => 21,
                    'month' => 3,
                    'year' => 2006),
                'dayOfWater' => array ('day' => 22,
                    'month' => 3,
                    'year' => 2006),
                'meteorologyDay' => array ('day' => 23,
                    'month' => 3,
                    'year' => 2006),
                'tuberculosisDay' => array ('day' => 24,
                    'month' => 3,
                    'year' => 2006),
                'worldsHealthDay' => array ('day' => 7,
                    'month' => 4,
                    'year' => 2006),
                'bookAndCopyrightDay' => array ('day' => 23,
                    'month' => 4,
                    'year' => 2006),
                'treesDay' => array ('day' => 25,
                    'month' => 4,
                    'year' => 2006),
                'intellectualPropertyDay' => array ('day' => 26,
                    'month' => 4,
                    'year' => 2006),
                'intDayOfWork' => array ('day' => 1,
                    'month' => 5,
                    'year' => 2006),
                'freedomOfPressDay' => array ('day' => 3,
                    'month' => 5,
                    'year' => 2006),
                'dayOfTheSun' => array ('day' => 3,
                    'month' => 5,
                    'year' => 2006),
                'intFamilyDay' => array ('day' => 15,
                    'month' => 5,
                    'year' => 2006),
                'telecommunicationsDay' => array ('day' => 17,
                    'month' => 5,
                    'year' => 2006),
                'culturalDevelopmentDay' => array ('day' => 21,
                    'month' => 5,
                    'year' => 2006),
                'biologicalDiversityDay' => array ('day' => 22,
                    'month' => 5,
                    'year' => 2006),
                'africanLiberationDay' => array ('day' => 25,
                    'month' => 5,
                    'year' => 2006),
                'unPeaceSquadsDay' => array ('day' => 29,
                    'month' => 5,
                    'year' => 2006),
                'nonsmokersDay' => array ('day' => 31,
                    'month' => 5,
                    'year' => 2006),
                'farmersDay' => array ('day' => 1,
                    'month' => 6,
                    'year' => 2006),
                'environmentDay' => array ('day' => 5,
                    'month' => 6,
                    'year' => 2006),
                'africanChildrenDay' => array ('day' => 16,
                    'month' => 6,
                    'year' => 2006),
                'desertDay' => array ('day' => 17,
                    'month' => 6,
                    'year' => 2006),
                'africanFugitiveDay' => array ('day' => 20,
                    'month' => 6,
                    'year' => 2006),
                'antiDrugsDay' => array ('day' => 26,
                    'month' => 6,
                    'year' => 2006),
                'intCoopDay' => array ('day' => 1,
                    'month' => 7,
                    'year' => 2006),
                'habitatDay' => array ('day' => 1,
                    'month' => 7,
                    'year' => 2006),
                'populationDay' => array ('day' => 11,
                    'month' => 7,
                    'year' => 2006),
                'indigenousPeopleDay' => array ('day' => 9,
                    'month' => 8,
                    'year' => 2006),
                'intYouthDay' => array ('day' => 12,
                    'month' => 8,
                    'year' => 2006),
                'slaveTradeDay' => array ('day' => 23,
                    'month' => 8,
                    'year' => 2006),
                'alphabetizationDay' => array ('day' => 8,
                    'month' => 9,
                    'year' => 2006),
                'ozoneLayerProtectionDay' => array ('day' => 16,
                    'month' => 9,
                    'year' => 2006),
                'intPeaceDay' => array ('day' => 19,
                    'month' => 9,
                    'year' => 2006),
                'tourismDay' => array ('day' => 27,
                    'month' => 9,
                    'year' => 2006),
                'intFugitiveDay' => array ('day' => 28,
                    'month' => 9,
                    'year' => 2006),
                'agedPeopleDay' => array ('day' => 1,
                    'month' => 10,
                    'year' => 2006),
                'animalsDay' => array ('day' => 4,
                    'month' => 10,
                    'year' => 2006),
                'outerSpaceWeek' => array ('day' => 4,
                    'month' => 10,
                    'year' => 2006),
                'teachersDay' => array ('day' => 5,
                    'month' => 10,
                    'year' => 2006),
                'postAssociationDay' => array ('day' => 9,
                    'month' => 10,
                    'year' => 2006),
                'sanityDay' => array ('day' => 10,
                    'month' => 10,
                    'year' => 2006),
                'nourishmentDay' => array ('day' => 16,
                    'month' => 10,
                    'year' => 2006),
                'povertyRemovalDay' => array ('day' => 17,
                    'month' => 10,
                    'year' => 2006),
                'unitedNationsDay' => array ('day' => 24,
                    'month' => 10,
                    'year' => 2006),
                'evolvementInfoDay' => array ('day' => 24,
                    'month' => 10,
                    'year' => 2006),
                'evolvementInfoDay' => array ('day' => 24,
                    'month' => 10,
                    'year' => 2006),
                'environmentalExploitationDay' => array ('day' => 6,
                    'month' => 11,
                    'year' => 2006),
                'toleranceDay' => array ('day' => 16,
                    'month' => 11,
                    'year' => 2006),
                'africanIndustrializationDay' => array ('day' => 20,
                    'month' => 11,
                    'year' => 2006),
                'worldChildrenDay' => array ('day' => 20,
                    'month' => 11,
                    'year' => 2006),
                'televisionDay' => array ('day' => 21,
                    'month' => 11,
                    'year' => 2006),
                'noViolenceAgainstWomen' => array ('day' => 25,
                    'month' => 11,
                    'year' => 2006),
                'palestinianSolidarity' => array ('day' => 29,
                    'month' => 11,
                    'year' => 2006),
                'worldAidsDay' => array ('day' => 1,
                    'month' => 12,
                    'year' => 2006),
                'againstSlaveryDay' => array ('day' => 1,
                    'month' => 12,
                    'year' => 2006),
                'disabledPeopleDay' => array ('day' => 3,
                    'month' => 12,
                    'year' => 2006),
                'evolvementHelperDay' => array ('day' => 5,
                    'month' => 12,
                    'year' => 2006),
                'civilAeronauticsDay' => array ('day' => 7,
                    'month' => 12,
                    'year' => 2006),
                'humanRightsDay' => array ('day' => 10,
                    'month' => 12,
                    'year' => 2006),
                'unicefDay' => array ('day' => 11,
                    'month' => 12,
                    'year' => 2006),
                'migrantsDay' => array ('day' => 18,
                    'month' => 12,
                    'year' => 2006),
                );

        $this->testDates2007 = array(
                'leprosyDay' => array ('day' => 28,
                    'month' => 1,
                    'year' => 2007),
                'nativeTongueDay' => array ('day' => 21,
                    'month' => 2,
                    'year' => 2007),
                'womensDay' => array ('day' => 8,
                    'month' => 3,
                    'year' => 2007),
                'worldConsumersDay' => array ('day' => 15,
                    'month' => 3,
                    'year' => 2007),
                'intForestDay' => array ('day' => 21,
                    'month' => 3,
                    'year' => 2007),
                'intDayBeatingRacism' => array ('day' => 21,
                    'month' => 3,
                    'year' => 2007),
                'dayOfPoesy' => array ('day' => 21,
                    'month' => 3,
                    'year' => 2007),
                'dayOfWater' => array ('day' => 22,
                    'month' => 3,
                    'year' => 2007),
                'meteorologyDay' => array ('day' => 23,
                    'month' => 3,
                    'year' => 2007),
                'tuberculosisDay' => array ('day' => 24,
                    'month' => 3,
                    'year' => 2007),
                'worldsHealthDay' => array ('day' => 7,
                    'month' => 4,
                    'year' => 2007),
                'bookAndCopyrightDay' => array ('day' => 23,
                    'month' => 4,
                    'year' => 2007),
                'treesDay' => array ('day' => 25,
                    'month' => 4,
                    'year' => 2007),
                'intellectualPropertyDay' => array ('day' => 26,
                    'month' => 4,
                    'year' => 2007),
                'intDayOfWork' => array ('day' => 1,
                    'month' => 5,
                    'year' => 2007),
                'freedomOfPressDay' => array ('day' => 3,
                    'month' => 5,
                    'year' => 2007),
                'dayOfTheSun' => array ('day' => 3,
                    'month' => 5,
                    'year' => 2007),
                'intFamilyDay' => array ('day' => 15,
                    'month' => 5,
                    'year' => 2007),
                'telecommunicationsDay' => array ('day' => 17,
                    'month' => 5,
                    'year' => 2007),
                'culturalDevelopmentDay' => array ('day' => 21,
                    'month' => 5,
                    'year' => 2007),
                'biologicalDiversityDay' => array ('day' => 22,
                    'month' => 5,
                    'year' => 2007),
                'africanLiberationDay' => array ('day' => 25,
                    'month' => 5,
                    'year' => 2007),
                'unPeaceSquadsDay' => array ('day' => 29,
                    'month' => 5,
                    'year' => 2007),
                'nonsmokersDay' => array ('day' => 31,
                    'month' => 5,
                    'year' => 2007),
                'farmersDay' => array ('day' => 1,
                    'month' => 6,
                    'year' => 2007),
                'environmentDay' => array ('day' => 5,
                    'month' => 6,
                    'year' => 2007),
                'africanChildrenDay' => array ('day' => 16,
                    'month' => 6,
                    'year' => 2007),
                'desertDay' => array ('day' => 17,
                    'month' => 6,
                    'year' => 2007),
                'africanFugitiveDay' => array ('day' => 20,
                    'month' => 6,
                    'year' => 2007),
                'antiDrugsDay' => array ('day' => 26,
                    'month' => 6,
                    'year' => 2007),
                'intCoopDay' => array ('day' => 7,
                    'month' => 7,
                    'year' => 2007),
                'habitatDay' => array ('day' => 7,
                    'month' => 7,
                    'year' => 2007),
                'populationDay' => array ('day' => 11,
                    'month' => 7,
                    'year' => 2007),
                'indigenousPeopleDay' => array ('day' => 9,
                    'month' => 8,
                    'year' => 2007),
                'intYouthDay' => array ('day' => 12,
                    'month' => 8,
                    'year' => 2007),
                'slaveTradeDay' => array ('day' => 23,
                    'month' => 8,
                    'year' => 2007),
                'alphabetizationDay' => array ('day' => 8,
                    'month' => 9,
                    'year' => 2007),
                'ozoneLayerProtectionDay' => array ('day' => 16,
                    'month' => 9,
                    'year' => 2007),
                'intPeaceDay' => array ('day' => 18,
                    'month' => 9,
                    'year' => 2007),
                'tourismDay' => array ('day' => 27,
                    'month' => 9,
                    'year' => 2007),
                'intFugitiveDay' => array ('day' => 28,
                    'month' => 9,
                    'year' => 2007),
                'agedPeopleDay' => array ('day' => 1,
                    'month' => 10,
                    'year' => 2007),
                'animalsDay' => array ('day' => 4,
                    'month' => 10,
                    'year' => 2007),
                'outerSpaceWeek' => array ('day' => 4,
                    'month' => 10,
                    'year' => 2007),
                'teachersDay' => array ('day' => 5,
                    'month' => 10,
                    'year' => 2007),
                'postAssociationDay' => array ('day' => 9,
                    'month' => 10,
                    'year' => 2007),
                'sanityDay' => array ('day' => 10,
                    'month' => 10,
                    'year' => 2007),
                'nourishmentDay' => array ('day' => 16,
                    'month' => 10,
                    'year' => 2007),
                'povertyRemovalDay' => array ('day' => 17,
                    'month' => 10,
                    'year' => 2007),
                'unitedNationsDay' => array ('day' => 24,
                    'month' => 10,
                    'year' => 2007),
                'evolvementInfoDay' => array ('day' => 24,
                    'month' => 10,
                    'year' => 2007),
                'evolvementInfoDay' => array ('day' => 24,
                    'month' => 10,
                    'year' => 2007),
                'environmentalExploitationDay' => array ('day' => 6,
                    'month' => 11,
                    'year' => 2007),
                'toleranceDay' => array ('day' => 16,
                    'month' => 11,
                    'year' => 2007),
                'africanIndustrializationDay' => array ('day' => 20,
                    'month' => 11,
                    'year' => 2007),
                'worldChildrenDay' => array ('day' => 20,
                    'month' => 11,
                    'year' => 2007),
                'televisionDay' => array ('day' => 21,
                    'month' => 11,
                    'year' => 2007),
                'noViolenceAgainstWomen' => array ('day' => 25,
                    'month' => 11,
                    'year' => 2007),
                'palestinianSolidarity' => array ('day' => 29,
                    'month' => 11,
                    'year' => 2007),
                'worldAidsDay' => array ('day' => 1,
                    'month' => 12,
                    'year' => 2007),
                'againstSlaveryDay' => array ('day' => 1,
                    'month' => 12,
                    'year' => 2007),
                'disabledPeopleDay' => array ('day' => 3,
                    'month' => 12,
                    'year' => 2007),
                'evolvementHelperDay' => array ('day' => 5,
                    'month' => 12,
                    'year' => 2007),
                'civilAeronauticsDay' => array ('day' => 7,
                    'month' => 12,
                    'year' => 2007),
                'humanRightsDay' => array ('day' => 10,
                    'month' => 12,
                    'year' => 2007),
                'unicefDay' => array ('day' => 11,
                    'month' => 12,
                    'year' => 2007),
                'migrantsDay' => array ('day' => 18,
                    'month' => 12,
                    'year' => 2007),
                );

        $this->testDates2008 = array(
                'leprosyDay' => array ('day' => 28,
                    'month' => 1,
                    'year' => 2008),
                'nativeTongueDay' => array ('day' => 21,
                    'month' => 2,
                    'year' => 2008),
                'womensDay' => array ('day' => 8,
                    'month' => 3,
                    'year' => 2008),
                'worldConsumersDay' => array ('day' => 15,
                    'month' => 3,
                    'year' => 2008),
                'intForestDay' => array ('day' => 21,
                    'month' => 3,
                    'year' => 2008),
                'intDayBeatingRacism' => array ('day' => 21,
                    'month' => 3,
                    'year' => 2008),
                'dayOfPoesy' => array ('day' => 21,
                    'month' => 3,
                    'year' => 2008),
                'dayOfWater' => array ('day' => 22,
                    'month' => 3,
                    'year' => 2008),
                'meteorologyDay' => array ('day' => 23,
                    'month' => 3,
                    'year' => 2008),
                'tuberculosisDay' => array ('day' => 24,
                    'month' => 3,
                    'year' => 2008),
                'worldsHealthDay' => array ('day' => 7,
                    'month' => 4,
                    'year' => 2008),
                'bookAndCopyrightDay' => array ('day' => 23,
                    'month' => 4,
                    'year' => 2008),
                'treesDay' => array ('day' => 25,
                    'month' => 4,
                    'year' => 2008),
                'intellectualPropertyDay' => array ('day' => 26,
                    'month' => 4,
                    'year' => 2008),
                'intDayOfWork' => array ('day' => 1,
                    'month' => 5,
                    'year' => 2008),
                'freedomOfPressDay' => array ('day' => 3,
                    'month' => 5,
                    'year' => 2008),
                'dayOfTheSun' => array ('day' => 3,
                    'month' => 5,
                    'year' => 2008),
                'intFamilyDay' => array ('day' => 15,
                    'month' => 5,
                    'year' => 2008),
                'telecommunicationsDay' => array ('day' => 17,
                    'month' => 5,
                    'year' => 2008),
                'culturalDevelopmentDay' => array ('day' => 21,
                    'month' => 5,
                    'year' => 2008),
                'biologicalDiversityDay' => array ('day' => 22,
                    'month' => 5,
                    'year' => 2008),
                'africanLiberationDay' => array ('day' => 25,
                    'month' => 5,
                    'year' => 2008),
                'unPeaceSquadsDay' => array ('day' => 29,
                    'month' => 5,
                    'year' => 2008),
                'nonsmokersDay' => array ('day' => 31,
                    'month' => 5,
                    'year' => 2008),
                'farmersDay' => array ('day' => 1,
                    'month' => 6,
                    'year' => 2008),
                'environmentDay' => array ('day' => 5,
                    'month' => 6,
                    'year' => 2008),
                'africanChildrenDay' => array ('day' => 16,
                    'month' => 6,
                    'year' => 2008),
                'desertDay' => array ('day' => 17,
                    'month' => 6,
                    'year' => 2008),
                'africanFugitiveDay' => array ('day' => 20,
                    'month' => 6,
                    'year' => 2008),
                'antiDrugsDay' => array ('day' => 26,
                    'month' => 6,
                    'year' => 2008),
                'intCoopDay' => array ('day' => 5,
                    'month' => 7,
                    'year' => 2008),
                'habitatDay' => array ('day' => 5,
                    'month' => 7,
                    'year' => 2008),
                'populationDay' => array ('day' => 11,
                    'month' => 7,
                    'year' => 2008),
                'indigenousPeopleDay' => array ('day' => 9,
                    'month' => 8,
                    'year' => 2008),
                'intYouthDay' => array ('day' => 12,
                    'month' => 8,
                    'year' => 2008),
                'slaveTradeDay' => array ('day' => 23,
                    'month' => 8,
                    'year' => 2008),
                'alphabetizationDay' => array ('day' => 8,
                    'month' => 9,
                    'year' => 2008),
                'ozoneLayerProtectionDay' => array ('day' => 16,
                    'month' => 9,
                    'year' => 2008),
                'intPeaceDay' => array ('day' => 16,
                    'month' => 9,
                    'year' => 2008),
                'tourismDay' => array ('day' => 27,
                    'month' => 9,
                    'year' => 2008),
                'intFugitiveDay' => array ('day' => 28,
                    'month' => 9,
                    'year' => 2008),
                'agedPeopleDay' => array ('day' => 1,
                    'month' => 10,
                    'year' => 2008),
                'animalsDay' => array ('day' => 4,
                    'month' => 10,
                    'year' => 2008),
                'outerSpaceWeek' => array ('day' => 4,
                    'month' => 10,
                    'year' => 2008),
                'teachersDay' => array ('day' => 5,
                    'month' => 10,
                    'year' => 2008),
                'postAssociationDay' => array ('day' => 9,
                    'month' => 10,
                    'year' => 2008),
                'sanityDay' => array ('day' => 10,
                    'month' => 10,
                    'year' => 2008),
                'nourishmentDay' => array ('day' => 16,
                    'month' => 10,
                    'year' => 2008),
                'povertyRemovalDay' => array ('day' => 17,
                    'month' => 10,
                    'year' => 2008),
                'unitedNationsDay' => array ('day' => 24,
                    'month' => 10,
                    'year' => 2008),
                'evolvementInfoDay' => array ('day' => 24,
                    'month' => 10,
                    'year' => 2008),
                'evolvementInfoDay' => array ('day' => 24,
                    'month' => 10,
                    'year' => 2008),
                'environmentalExploitationDay' => array ('day' => 6,
                    'month' => 11,
                    'year' => 2008),
                'toleranceDay' => array ('day' => 16,
                    'month' => 11,
                    'year' => 2008),
                'africanIndustrializationDay' => array ('day' => 20,
                    'month' => 11,
                    'year' => 2008),
                'worldChildrenDay' => array ('day' => 20,
                    'month' => 11,
                    'year' => 2008),
                'televisionDay' => array ('day' => 21,
                    'month' => 11,
                    'year' => 2008),
                'noViolenceAgainstWomen' => array ('day' => 25,
                    'month' => 11,
                    'year' => 2008),
                'palestinianSolidarity' => array ('day' => 29,
                    'month' => 11,
                    'year' => 2008),
                'worldAidsDay' => array ('day' => 1,
                    'month' => 12,
                    'year' => 2008),
                'againstSlaveryDay' => array ('day' => 1,
                    'month' => 12,
                    'year' => 2008),
                'disabledPeopleDay' => array ('day' => 3,
                    'month' => 12,
                    'year' => 2008),
                'evolvementHelperDay' => array ('day' => 5,
                    'month' => 12,
                    'year' => 2008),
                'civilAeronauticsDay' => array ('day' => 7,
                    'month' => 12,
                    'year' => 2008),
                'humanRightsDay' => array ('day' => 10,
                    'month' => 12,
                    'year' => 2008),
                'unicefDay' => array ('day' => 11,
                    'month' => 12,
                    'year' => 2008),
                'migrantsDay' => array ('day' => 18,
                    'month' => 12,
                    'year' => 2008),
                );
    }

    /**
     * test Holidays for 2005
     *
     * @access public
     * @return void
     */
    function testHolidays2005()
    {
        $drv = Date_Holidays::factory('UNO', 2005, 'en_EN');
        $this->assertFalse(Date_Holidays::isError($drv));

        foreach ($this->testDates2005 as $name => $dateInfo) {

            $day = $drv->getHoliday($name);
            $this->assertFalse(Date_Holidays::isError($day));
            $this->assertEquals($name, $day->getInternalName());
            $date = $day->getDate();
            $this->assertEquals($dateInfo['day'], $date->getDay(), $name);
            $this->assertEquals($dateInfo['month'], $date->getMonth(), $name);
            $this->assertEquals($dateInfo['year'], $date->getYear(), $name);
        }
    }

    /**
     * test Holidays for 2006
     *
     * @access public
     * @return void
     */
    function testHolidays2006()
    {
        $drv = Date_Holidays::factory('UNO', 2006, 'en_EN');
        $this->assertFalse(Date_Holidays::isError($drv));

        foreach ($this->testDates2006 as $name => $dateInfo) {

            $day = $drv->getHoliday($name);
            $this->assertFalse(Date_Holidays::isError($day));
            $this->assertEquals($name, $day->getInternalName());
            $date = $day->getDate();
            $this->assertEquals($dateInfo['day'], $date->getDay(), $name);
            $this->assertEquals($dateInfo['month'], $date->getMonth(), $name);
            $this->assertEquals($dateInfo['year'], $date->getYear(), $name);
        }
    }

    /**
     * test Holidays for 2007
     *
     * @access public
     * @return void
     */
    function testHolidays2007()
    {
        $drv = Date_Holidays::factory('UNO', 2007, 'en_EN');
        $this->assertFalse(Date_Holidays::isError($drv));

        foreach ($this->testDates2007 as $name => $dateInfo) {

            $day = $drv->getHoliday($name);
            $this->assertFalse(Date_Holidays::isError($day));
            $this->assertEquals($name, $day->getInternalName());
            $date = $day->getDate();
            $this->assertEquals($dateInfo['day'], $date->getDay(), $name);
            $this->assertEquals($dateInfo['month'], $date->getMonth(), $name);
            $this->assertEquals($dateInfo['year'], $date->getYear(), $name);
        }
    }

    /**
     * test Holidays for 2008
     *
     * @access public
     * @return void
     */
    function testHolidays2008()
    {
        $drv = Date_Holidays::factory('UNO', 2008, 'en_EN');
        $this->assertFalse(Date_Holidays::isError($drv));

        foreach ($this->testDates2008 as $name => $dateInfo) {

            $day = $drv->getHoliday($name);
            $this->assertFalse(Date_Holidays::isError($day));
            $this->assertEquals($name, $day->getInternalName());
            $date = $day->getDate();
            $this->assertEquals($dateInfo['day'], $date->getDay(), $name);
            $this->assertEquals($dateInfo['month'], $date->getMonth(), $name);
            $this->assertEquals($dateInfo['year'], $date->getYear(), $name);
        }
    }

}
?>
