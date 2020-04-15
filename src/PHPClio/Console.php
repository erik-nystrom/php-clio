<?php 

/**
 * A Super simple PHP Command Line IO class.
 * If you'd like to do command line scripts in PHP, with IO, then this may be of use to you.
 */

namespace PHPClio;

class Console {

    private $inputBuffer = null;
    private $outputBuffer = null;
    private static $instance = null;

    /**
     * Constructor. If for some reason you're not using PHP's standard IO buffers, change them here.
     */
    private function __construct() {
        $this->inputBuffer = fopen("php://stdin","r");
        $this->outputBuffer = fopen("php://stdout","w+");
    }
    
    /**
     * Cloning is disabled.
     */
    final public function __clone() {
        throw new \Exception('Unable to clone object of type PHPClio\\Console');
    }

    /**
     * Sleep is disabled.
     */
    final public function __sleep() {
        throw new \Exception('Unable to sleep object of type PHPClio\\Console');
    }

    /**
     * Wakeup is disabled.
     */
    final public function __wakeup() {
        throw new \Exception('Unable to wakeup object of type PHPClio\\Console');
    }

    private static function getInstance() {
        if (self::$instance == null){
            self::$instance = new Console();
        }
        return self::$instance;
    }

    /**
     * Read text from the input buffer.
     * 
     * @param $message Prompt the user with a message, if you want
     * @param $allowed An array of values, used to restrict input
     * @return string
     */
    public static function in($message = '', $allowed = false) {

        if($allowed && is_array($allowed)) {

            $input = null;
            
            while(!in_array($input, $allowed)) {
                self::out(sprintf("%s [%s] ", $message, implode(', ', $allowed)), false);
                $input = trim(fgets(self::getInstance()->inputBuffer));
            }

        } else {

            self::out($message . " ", false);
            $input = trim(fgets(self::getInstance()->inputBuffer));

        }

        return $input;

    }

    /**
     * Write text to the output buffer.
     * 
     * @param $message Prompt the user with a message, if you want
     * @param $allowed An array of values, used to restrict input
     * @return string
     */
    public static function out($message = '', $newline = "\n") {
        return fputs(self::getInstance()->outputBuffer, $message . $newline);
    }

}