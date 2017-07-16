<?php
/**
 * Copyright © 2017 Kristian Matthews. All rights reserved.
 */

namespace EpicKris\Provider;

use Faker\Provider\Base;

/**
 * School provider.
 *
 * @package EpicKris\Provider
 */
class School extends Base
{
    /**
     * @var string[] School formats.
     */
    protected static $schoolFormats = [
        '{{country}} {{schoolSuffix}}', '{{schoolPrefix}} Central {{country}}', '{{schoolPrefix}} {{country}}', 'The {{schoolPrefix}} {{country}}'
    ];

    /**
     * @var string[] School prefixes.
     */
    protected static $schoolPrefixes = [
        'Acadamy', 'Acadamy of', 'College of', 'Community School of', 'Cooperative School', 'International Community School of', 'International School', 'International School of', 'International Secondary School', 'National University of', 'School Foundation of', 'School', 'School of', 'United World College', 'United World College of'
    ];

    /**
     * @var string[] School suffixes.
     */
    protected static $schoolSuffixes = [
        'Acadamy', 'Alliance International School', 'College', 'College School', 'Community School', 'Comprehensive School', 'Cooperative School', 'Grammar School', 'High School', 'Institute', 'International Acadamy', 'International College', 'International Community School', 'International High School', 'International School', 'International School and College', 'International Secondary School', 'School', 'School & College', 'School Foundation', 'Secondary College', 'Secondary School', 'United World College'
    ];

    /**
     * @var string[] School email formats.
     */
    protected static $schoolEmailFormats = [
        '{{schoolId}}@{{schoolDomain}}', '{{schoolUserName}}@{{schoolDomain}}'
    ];

    /**
     * @var string[] School TLDs.
     */
    protected static $schoolTlds = [
        'ac.uk', 'edu.kw'
    ];

    /**
     * School.
     *
     * @return string School.
     */
    public function school()
    {
        $schoolFormat = $this->generator->randomElement($this->schoolFormats);
        return $this->generator->parse($schoolFormat);
    }

    /**
     * School prefix.
     *
     * @return string School prefix.
     */
    public function schoolPrefix()
    {
        return $this->generator->randomElement($this->schoolPrefixes);
    }

    /**
     * School suffix.
     *
     * @return string School suffix.
     */
    public function schoolSuffix()
    {
        return $this->generator->randomElement($this->schoolSuffixes);
    }

    /**
     * School ID.
     *
     * @return string School ID.
     */
    public function schoolId()
    {
        $id = $this->generator->numberBetween(1);
        return str_pad($id, 10, '0', STR_PAD_LEFT);
    }

    /**
     * School email.
     *
     * @return string School email.
     */
    public function schoolEmail()
    {
        $schoolEmailFormat = $this->generator->randomElement($this->schoolEmailFormats);
        return $this->generator->parse($schoolEmailFormat);
    }

    /**
     * School domain.
     *
     * @return string School domain.
     */
    public function schoolDomain()
    {
        $domain = $this->generator->parse('{{country}}.{{schoolTld}}');
        return str_replace(' ', '', strtolower($domain));
    }

    /**
     * School username.
     *
     * @return string School username.
     */
    public function schoolUsername()
    {
        $firstName = strtolower($this->generator->firstName);
        $lastName = strtolower($this->generator->lastName);

        if ($this->generator->boolean(20)) {
            $firstName = substr($firstName, 0, 1);
        }

        if ($this->generator->boolean(20)) {
            $lastName = substr($lastName, 0, 1);
        }

        return $firstName . '.' . $lastName;
    }

    /**
     * School TLD.
     *
     * @return string School TLD.
     */
    public function schoolTld()
    {
        return $this->generator->randomElement($this->schoolTlds);
    }
}
