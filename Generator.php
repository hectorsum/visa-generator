<?php
// namespace Plansky\CreditCard;

/**
* Generates a random credit card number from a prefix and length. This is useful
* when you need to test some specific brand numbers that you can't find out in
* the internet easily.
*/
require('LuhnCalculator.php');
class CardGenerator
{
    /**
     * Generates the random credit card number using the given prefix and
     * length. It uses default otherwise
     *
     * @param integer $prefix
     * @param integer $length
     *
     * @return string
     */
    public function generateNumber($prefix = null, $length = 16)
    {
        if ($length <= strlen($prefix)) {
            throw new \InvalidArgumentException(
                'The \'length\' parameter should be greater than \'prefix\' '.
                'string length'
            );
        }
        $number = $prefix . $this->getRand($length - strlen($prefix));
        return $number . (new LuhnCalculator())->verificationDigit($number);
    }

    /**
     * Generates the given amount of credit card numbers
     *
     * @param integer $amount
     * @param integer $prefix
     * @param integer $length
     *
     * @return integer[]
     */
    public function lot($amount, $prefix = null, $length = 16){
        $numbers = [];
        for ($index = 1; $index <= $amount; $index++) {
            $numbers[] = $this->single($prefix, $length);
        }
        return $numbers;
    }

    /**
     * Retrieves a random number to put in the middle of card number
     *
     * Example:
     *     length = 5: Generates a number between 00000 and 99999
     *
     * @param integer $length
     *
     * @return integer
     */
    public function getDate(){
        $month = '';
        $year = '';
        $month .= rand(1, 12);
        $year .= rand(date("Y"), date("Y") + 5);
        return $month.'/'.$year;
    }
    public function getCVV($length = 3){
        $rand = '';
        for ($index = 0; $index < $length; $index++) {
            $rand .= rand(1, 3);
        }
        return $rand;
    }
    public function getRand($length){
        $rand = '';
        for ($index = 0; $index < $length; $index++) {
            $rand .= rand(0, 9);
        }
        return $rand;
    }
}