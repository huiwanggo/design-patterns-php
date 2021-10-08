<?php

namespace DesignPatterns\Behavioral\Strategy;

use DateTime;
use Exception;

class DateComparator implements Comparator
{

    /**
     * @throws Exception
     */
    public function compare($a, $b): int
    {
        $aDate = new DateTime($a['date']);
        $bDate = new DateTime($b['date']);

        return $aDate <=> $bDate;
    }
}
