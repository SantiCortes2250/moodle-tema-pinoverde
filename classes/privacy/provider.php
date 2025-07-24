<?php

namespace theme_pinoverde\privacy;

/**
 * Define for privacy provider.
 */
class provider implements \core_privacy\local\metadata\null_provider {
    /**
     * Returns meta data about this system.
     *
     * @return  string
     */
    public static function get_reason(): string {
        return 'privacy:metadata';
    }
}
