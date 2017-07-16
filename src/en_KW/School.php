<?php
/**
 * Copyright © 2017 Kristian Matthews. All rights reserved.
 */

namespace EpicKris\Provider\en_KW;

/**
 * School provider.
 *
 * @package EpicKris\Provider\en_KW
 */
class School extends \EpicKris\Provider\School
{
    /**
     * @var string[] School formats.
     */
    protected static $schoolFormats = [
        '{{city}} {{schoolSuffix}}', '{{state}} {{schoolSuffix}}', '{{schoolPrefix}} {{city}}', '{{schoolPrefix}} {{state}}'
    ];

    /**
     * @var string[] School prefixes.
     */
    protected static $schoolPrefixes = [
        'College of'
    ];

    /**
     * @var string[] School suffixes.
     */
    protected static $schoolSuffixes = [
        'College', 'University'
    ];

    /**
     * @var string[] School TLDs.
     */
    protected static $schoolTlds = ['edu.kw'];
}
