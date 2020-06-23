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
namespace PTK\Exceptlion\FileSystem;

use Exception;
use Throwable;

/**
 * Usada quando ocorre uma falha ao ler um arquivo/diretório.
 *
 * @author Everton
 */
class ReadException extends Exception
{
    
    /**
     *
     * @var string Caminho para o recurso.
     */
    protected string $path = '';
    
    /**
     *
     * @param string $path Caminho para o recurso.
     *
     * @param string $message
     * @param int $code
     * @param Throwable $previous
     * @return Exception
     */
    public function __construct(string $path, string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        
        $this->path = $path;
    }
    
    /**
     * Fornece o caminho do recurso.
     *
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }
}
