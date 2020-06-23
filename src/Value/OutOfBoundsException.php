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
 * Usada quando um valor está fora de uma lista de valores possíveis.
 *
 * @author Everton
 */
class OutOfBoundsException extends Exception
{
    
    /**
     *
     * @var array A lista de valores permitidos.
     */
    protected array $acceptedValues = [];
    
    /**
     *
     * @var mixed O valor encontrado.
     */
    protected $value = '';


    /**
     *
     * @param mixed $value O valor encontrado.
     * @param array $acceptedValues A lista de valores possíveis.
     * @param string $message
     * @param int $code
     * @param Throwable $previous
     * @return Exception
     * @throws Exceptlion\Type\InvalidTypeException
     */
    public function __construct(
        $value,
        array $acceptedValues,
        string $message = "",
        int $code = 0,
        Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
        
        $this->acceptedValues = $acceptedValues;
        $this->value = $value;
    }
    
    /**
     * Fornece a lista de valores permitidos.
     *
     * @return array
     */
    public function getAcceptedValues(): array
    {
        return $this->acceptedValues;
    }
    
    /**
     * Fornece o valor encontrado.
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}
