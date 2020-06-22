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
namespace Exceptlion\FileSystem;

use Exception;
use Throwable;

/**
 * Usada quando um path não é um arquivo.
 *
 * @author Everton
 */
class NotIsAFileException extends Exception
{
    
    /**
     *
     * @var string Caminho para o recurso que não é um arquivo.
     */
    protected string $pathResource = '';
    
    /**
     *
     * @param string $pathResource Caminho para o recurso que não é um arquivo.
     *
     * @param string $message
     * @param int $code
     * @param Throwable $previous
     * @return Exception
     */
    public function __construct(string $pathResource, string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        
        $this->pathResource = $pathResource;
    }
    
    /**
     * Fornece o caminho do recurso que não é um arquivo.
     *
     * @return string
     */
    public function getPathResource(): string
    {
        return $this->pathResource;
    }
}