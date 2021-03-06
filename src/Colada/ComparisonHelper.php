<?php

namespace Colada;

/**
 * @internal
 *
 * @author Alexey Shockov <alexey@shockov.com>
 */
class ComparisonHelper
{
    /**
     * @param mixed $element1
     * @param mixed $element2
     *
     * @return bool
     */
    public static function isEquals($element1, $element2)
    {
        if (is_object($element1)) {
            if (method_exists($element1, 'isEqualTo')) {
                return $element1->isEqualTo($element2);
            } else {
                return ($element1 === $element2);
            }
        }

        return ($element1 == $element2);
    }
}
