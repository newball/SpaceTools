<?php

declare(strict_types=1);

namespace Newball\SpaceTools\Space;

class Space
{
    protected $chars;
    
    /**
     * Constructor 
     * 
     * @param int $chars The number of space characters to display
     * @param string $kind Determines the kind of space to return. Values: space | escaped  
     * 
     * @return string 
    */
    
    public function __construct(int $chars = 1, string $kind = 'space')
    {
        if ('space' == $kind) {
            foreach($this->whitesSpace($chars) as $space) {
                return $space;
            }
        }

    }
    
    /**
     * Generator that producted a space ' '
     *
     * This is a simple generator that returns a space in the form of a ' '.
     *
     * @param int $chars The number of of space characters to produce
     * 
     * @return string
     */
    
    public function whitesSpace($chars)
    {
        for ($i = 0; $i < $chars; $i++) {
            yield " ";
        }
    }

    /**
     * Generator that produces an escaped space
     *
     * This is a simple generator that returns a space in the form of an escaped space.
     *
     * @param int $chars The number of of space characters to produce
     * 
     * @return string
     */
    
    public function whitesSpaceEscape($chars)
    {
        for ($i = 0; $i < $chars; $i++) {
            yield "\040";
        }
    }
    
}