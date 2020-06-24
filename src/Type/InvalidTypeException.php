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
namespace PTK\Exceptlion\Type;

use Exception;
use Throwable;

/**
 * Usada quando um tipo inválido é encontrado.
 *
 * @author Everton
 */
class InvalidTypeException extends Exception
{
    
    /**
     *
     * @var string O tipo encontrado.
     */
    protected string $typeFound = '';
    
    /**
     *
     * @var array O tipo esperado.
     */
    protected array $typeExpected = [];


    /**
     *
     * @param string $typeFound O tipo encontrado.
     * @param array $typeExpected A lista de tipos esperados.
     * @param string $message
     * @param int $code
     * @param Throwable $previous
     * @return Exception
     */
    public function __construct(
        string $typeFound,
        array $typeExpected,
        string $message = "",
        int $code = 0,
        Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
        
        $this->typeFound = $typeFound;
        $this->typeExpected = $typeExpected;
    }
    
    /**
     * Fornece o tipo encontrado.
     *
     * @return string
     */
    public function getTypeFound(): string
    {
        return $this->typeFound;
    }
    
    /**
     * Fornece a lista dos tipos esperados.
     *
     * @return array
     */
    public function getTypeExpected(): array
    {
        return $this->typeExpected;
    }
}
