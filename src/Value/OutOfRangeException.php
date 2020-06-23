<?php

/*
 * The MIT License
 *
 * Copyright 2020 Everton.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
namespace PTK\Exceptlion\Value;

use Exception;
use Exceptlion\Type\InvalidTypeException;
use Throwable;

/**
 * Usada quando um valor está fora de um intervalo.
 *
 * @author Everton
 */
class OutOfRangeException extends Exception
{
    
    /**
     *
     * @var numeric O limite inferior.
     */
    protected $lowerLimit = 0;
    
    /**
     *
     * @var numeric O limite superior.
     */
    protected $upperLimit = 0;
    
    /**
     *
     * @var numeric O valor encontrado.
     */
    protected $value = 0;


    /**
     *
     * @param numeric $value O valor encontrado.
     * @param numeric $lowerLimit O limite inferior.
     * @param numeric $upperLimit O limite superior.
     * @param string $message
     * @param int $code
     * @param Throwable $previous
     * @return Exception
     * @throws Exceptlion\Type\InvalidTypeException
     */
    public function __construct(
        $value,
        $lowerLimit,
        $upperLimit,
        string $message = "",
        int $code = 0,
        Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
        
        if (is_numeric($lowerLimit) === false) {
            throw new InvalidTypeException(gettype($lowerLimit), 'numeric');
        }
        $this->lowerLimit = $lowerLimit;
        
        if (is_numeric($upperLimit) === false) {
            throw new InvalidTypeException(gettype($upperLimit), 'numeric');
        }
        $this->upperLimit = $upperLimit;
        
        if (is_numeric($value) === false) {
            throw new InvalidTypeException(gettype($value), 'numeric');
        }
        $this->value = $value;
    }
    
    /**
     * Fornece o limite inferior.
     *
     * @return numeric
     */
    public function getLowerLimit()
    {
        return $this->lowerLimit;
    }
    
    /**
     * Fornece o limite superior.
     *
     * @return numeric
     */
    public function getUpperLimit()
    {
        return $this->upperLimit;
    }
    
    /**
     * Fornece o valor encontrado.
     *
     * @return numeric
     */
    public function getValue()
    {
        return $this->value;
    }
}
