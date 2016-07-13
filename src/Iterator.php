<?php
namespace Haldayne\CalendarIterator;

class Iterator implements \Iterator
{
    /**
     * @param \DateTime|string|int $begin The date time from which to begin iterating.
     * @param \DateTime|string|int|null $end The optional date time to stop iterating.
     * @param \DateInterval|string $interval The iteration interval.
     */
    public function __construct($begin, $end, $interval)
    {
        if (! $begin instanceof \DateTime) {
            try {
                $this->begin = new \DateTime($begin);
            } catch (\Exception $ex) {
                throw new IteratorException('Invalid begin date');
            }
        }
        if (! $end instanceof \DateTime) {
            try {
                $this->end = new \DateTime($end);
            } catch (\Exception $ex) {
                throw new IteratorException('Invalid end date');
            }
        }
        if (! $interval instanceof \DateInterval) {
            try {
                $this->interval = new \DateInterval($interval);
            } catch (\Exception $ex) {
                throw new IteratorException('Invalid interval');
            }
        }
    }

    public function current()
    {
    }

    public function key()
    {
    }

    public function next()
    {
    }

    public function rewind()
    {
    }

    public function valid()
    {
    }
}
