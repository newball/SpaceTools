<?php

declare(strict_types=1);

namespace Newball\SpaceTools;

class Newline
{
    /**
     * @var int This contains the number of newlines 
     */
    protected $lines;
    
    /**
     * @var string This contains the type of newlines that is being returned. Accepts: linebreak | return | both
     */
    protected $kind;
    
    /**
     * @var string this holds the newlines
     */
    public $nl;
    
    /**
     * Constructor 
     * 
     * @param int $lines The number of newlines to create
     * @param string $kind Determines the kind of newline to return. Values: linebreak | return | both
    */
    
    public function __construct(int $lines = 1, string $kind = 'linebreak')
    {
        $this->lines = $lines;
        $this->kind = $kind;
        
        $this->generateBreak();
    }

    private function generateBreak()
    {
        if ('linebreak' == $this->kind) {
            foreach($this->lineBreak($this->lines) as $linebreak) {   
                $this->nl .= $linebreak;
            }
        } elseif ('return' == $this->kind) {
            foreach($this->lineReturn($this->lines) as $linebreak) {   
                $this->nl .= $linebreak;
            }            
        } elseif ('both' == $this->kind) {
            foreach($this->lineBoth($this->lines) as $linebreak) {   
                $this->nl .= $linebreak;
            }                        
        }
    }
    
    /**
     * Generator that produced a linebreak \n
     *
     * This is a simple generator that returns a newline in the form of a \n.
     *
     * @param int $lines The number of newlines to produce
     * 
     * @return Generator
     */
    
    private function lineBreak($lines)
    {
        for ($i = 0; $i < $lines; $i++) {
            yield "\n";
        }
    }

    /**
     * Generator that produced a newline \r
     *
     * This is a simple generator that returns a newline in the form of a \r.
     *
     * @param int $lines The number of newlines to produce
     * 
     * @return Generator
     */
    
    private function lineReturn($lines)
    {
        for ($i = 0; $i < $lines; $i++) {
            yield "\r";
        }
    }

    /**
     * Generator that produced a newline \r\n
     *
     * This is a simple generator that returns a newline in the form of a \r\n.
     *
     * @param int $lines The number of of newline to produce
     * 
     * @return Generator
     */
    
    private function lineBoth($lines)
    {
        for ($i = 0; $i < $lines; $i++) {
            yield "\r\n";
        }
    }    
}