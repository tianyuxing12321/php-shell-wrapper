<?php

namespace AdamBrett\ShellWrapper\Command\Collections;

use AdamBrett\ShellWrapper\Command\Flag;

class Flags
{
    protected $flags = array();

    public function __toString()
    {
        return join(' ', $this->flags);
    }

    public function addFlag(Flag $flag)
    {
        $this->flags[(string) $flag] = $flag;
    }

    public function __clone()
    {
        $clonedFlagsList = array();
        foreach ($this->flags as $flag) {
            $clonedFlagsList[] = clone $flag;
        }

        $this->flags = $clonedFlagsList;
    }
}
