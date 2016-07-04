<?php

namespace Simplicity\Module\Request
{

  class RequestTime
  {
    /** ********************************************************************* */
    /**                            CONSTANTS                                  */
    /** ********************************************************************* */

    const time  = 0;

    /** ********************************************************************* */
    /**                            VARIABLES                                  */
    /** ********************************************************************* */

    private $data = [
      self::time => null,
    ];

    /** ********************************************************************* */
    /**                              CORE                                     */
    /** ********************************************************************* */

    public function __construct( string $time )
    {
      $this->setTime( $time );
    }

    public function __destruct()
    {

    }

    /** ********************************************************************* */
    /**                             GETTER                                    */
    /** ********************************************************************* */

    public function time() : int
    { return $this->data[self::time]; }

    /** ********************************************************************* */
    /**                             SETTER                                    */
    /** ********************************************************************* */

    private function setTime( string $time )
    { $this->data[self::time] = $time; }
  }
}