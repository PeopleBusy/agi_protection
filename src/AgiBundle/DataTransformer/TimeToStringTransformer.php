<?php

namespace AgiBundle\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use \DateTimeImmutable;

class TimeToStringTransformer implements DataTransformerInterface
{

    /**
     * @param \DateTime|null $time
     * @return string
     */
    public function transform($time)
    {
        if (null === $time) {
            return '';
        }
        return $time->format('H:i A');
    }

    /**
     * @param  string $timeString
     * @return \Time
     */
    public function reverseTransform($timeString)
    {
        $time = DateTimeImmutable::createFromFormat('H:i A', $timeString);
        return $time;
    }


}