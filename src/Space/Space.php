<?php

declare(strict_types=1);

namespace Newball\SpaceTools;

class Space
{
    /**
     * @var int This contains the amount of white spaces to be used
     */
    protected $chars;
    
    /**
     * @var string This contains the type of space that is being returned. Accepts: space | escaped
     */
    protected $kind;
    
    /**
     * @var string this holds the actual spaces generated
     */
    public $spaces;
    
    /**
     * Constructor 
     * 
     * @param int $chars The number of space characters to display
     * @param string $kind Determines the kind of space to return. Values: space | escaped   
     */
    
    public function __construct(int $chars = 1, string $kind = 'space')
    {
        $this->chars = $chars;
        $this->kind = $kind;
        
        $this->generateSpace();
    }

    private function generateSpace()
    {
        if ('space' == $this->kind) {
            foreach ($this->whitesSpace($this->chars) as $space) {   
                $this->spaces .= $space;
            }
        } elseif ('escaped' == $this->kind) {
            foreach ($this->whitesSpaceEscape($this->chars) as $space) {   
                $this->spaces .= $space;
            }            
        }

    }
    
    /**
     * Generator that produced a space ' '
     *
     * This is a simple generator that returns a space in the form of a ' '.
     *
     * @param int $chars The number of of space characters to produce
     * 
     * @return \Generator
     */
    
    private function whitesSpace($chars)
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
     * @return \Generator
     */
    
    private function whitesSpaceEscape($chars)
    {
        for ($i = 0; $i < $chars; $i++) {
            yield "\040";
        }
    }
    
}