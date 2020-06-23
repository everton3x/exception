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
use Throwable;

/**
 * Usada quando um valor inválido é encontrado.
 *
 * @author Everton
 */
class InvalidValueException extends Exception
{
    
    /**
     *
     * @var string O valor encontrado.
     */
    protected string $valueFound = '';
    
    /**
     *
     * @var string O valor esperado.
     */
    protected string $valueExpected = '';


    /**
     *
     * @param string $valueFound O valor encontrado.
     * @param string $valueExpected O valor esperado.
     * @param string $message
     * @param int $code
     * @param Throwable $previous
     * @return Exception
     */
    public function __construct(
        string $valueFound,
        string $valueExpected,
        string $message = "",
        int $code = 0,
        Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
        
        $this->valueFound = $valueFound;
        $this->valueExpected = $valueExpected;
    }
    
    /**
     * Fornece o tipo encontrado.
     *
     * @return string
     */
    public function getValueFound(): string
    {
        return $this->valueFound;
    }
    
    /**
     * Fornece o tipo esperado.
     *
     * @return string
     */
    public function getValueExpected(): string
    {
        return $this->valueExpected;
    }
}
