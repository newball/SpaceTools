<?php

declare(strict_types=1);

namespace Newball\SpaceTools\Space;

class Space
{
    protected $chars;
    
    /**
     * Constructor 
     * 
     * @param int $chars The number of white space characters to display
     */
    
    public function __construct(int $chars, string $type)
    {
        if ($chars > 1) {
            $this->chars = $chars;
        } else {
            $this->chars = 1;
        }
    }
    
    public function whitesSpace()
    {
        yield ' ';
    }
    
    pubic function whitesSpaceEscape()
    {
        yield '\040';
    }
    
}