<?php

namespace App\Http\Traits;

trait ThrottleTrait
{
    /**
     * Ignore Throttle
     *
     * @param [type] $id
     * @return void
     */
    public function ignoreThrottleRequest($id)
    {
        $throttle = Throttles::find($id);
        $throttle->ignore = 1;
        $throttle->save();
        return ['success', 'Changes saved'];
    }
}