<?php

namespace Members\Model;

use Pimcore\Model\Object\Concrete;

class Object extends Concrete {

    var $restricted = FALSE;

    /**
     * @param $restricted
     */
    public function setRestricted($restricted)
    {
        $this->restricted = $restricted;
    }

    /**
     * @return bool
     */
    public function getRestricted()
    {
        $restriction = \Members\Tool\Observer::isRestrictedObject( $this );
        $this->setValue('restricted', $restriction['section'] === \Members\Tool\Observer::SECTION_NOT_ALLOWED);

        return $this->restricted;
    }
}