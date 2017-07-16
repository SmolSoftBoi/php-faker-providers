<?php
/**
 * Copyright © 2017 Kristian Matthews. All rights reserved.
 */

namespace EpicKris\Provider\en_GB;

/**
 * School provider.
 *
 * @package EpicKris\Provider\en_GB
 */
class School extends \EpicKris\Provider\School
{
    /**
     * @var string[] School formats.
     */
    protected static $schoolFormats = [
        'Central {{city}} {{schoolSuffix}}', '{{city}} City {{schoolSuffix}}', '{{city}} {{schoolSuffix}}', '{{city}} South {{schoolSuffix}}', '{{schoolPrefix}} Central {{city}}', '{{schoolPrefix}} Central {{state}}', '{{schoolPrefix}} East {{city}}', '{{schoolPrefix}} East {{state}}', '{{schoolPrefix}} {{city}}', '{{schoolPrefix}} {{state}}', 'Central {{state}} {{schoolSuffix}}', '{{state}} {{schoolSuffix}}', '{{state}} South {{schoolSuffix}}'
    ];

    /**
     * @var string[] School prefixes.
     */
    protected static $schoolPrefixes = [
        'Acadamy of', 'University College', 'University College of', 'University of'
    ];

    /**
     * @var string[] School suffixes.
     */
    protected static $schoolSuffixes = [
        'College', 'Institute', 'School', 'University', 'University College'
    ];

    /**
     * @var string[] School TLDs.
     */
    protected static $schoolTlds = ['ac.uk'];
}
