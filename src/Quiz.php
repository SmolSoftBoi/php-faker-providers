<?php
/**
 * Copyright © 2017 Kristian Matthews. All rights reserved.
 */

namespace EpicKris\Provider;

use Faker\Provider\Base;

/**
 * Quiz provider.
 *
 * @package EpicKris\Provider
 */
class Quiz extends Base
{
    /**
     * Quiz name.
     *
     * @return string Quiz name.
     */
    public function quizName()
    {
        $name = $this->generator->sentence($this->generator->numberBetween(2, 8));
        $name = rtrim($name, '.');
        return $name;
    }

    /**
     * Quiz description.
     *
     * @return string Quiz description.
     */
    public function quizDescription()
    {
        return $this->generator->paragraph($this->generator->numberBetween(2, 8));
    }

    /**
     * Quiz question.
     *
     * @return string Quiz question.
     */
    public function quizQuestion()
    {
        $question = $this->generator->sentence($this->generator->numberBetween(2, 8));
        $question = rtrim($question, '.') . '?';
        return $question;
    }

    /**
     * Quiz answer.
     *
     * @return string Quiz answer.
     */
    public function quizAnswer()
    {
        $answer = $this->generator->sentence($this->generator->numberBetween(1, 8));
        $answer = rtrim($answer, '.');
        return $answer;
    }
}
