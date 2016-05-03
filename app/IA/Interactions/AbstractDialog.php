<?php


namespace App;


/**
 * Class AbstractDialog
 * @package App
 */
class AbstractDialog implements Dialogs
{
    /**
     * @var Character
     */
    private $transmiter;
    /**
     * @var Character
     */
    private $receiver;
    /**
     * @var Character
     */
    private $commentators = [];

    /**
     * @param Character $transmiter
     * @return $this
     */
    public function comTransmiter($transmiter = null)
    {
        if($transmiter === null) {
            $this->transmiter = $transmiter;
        }
        return $this;
    }
    /**
     * @param Character $receiver
     * @return $this
     */
    public function comReceiver($receiver = null)
    {
        if($receiver === null) {
            $this->receiver = $receiver;
        }
        return $this;
    }
    /**
     * @param Character $commentators
     * @return $this
     */
    public function comCommentators($commentators = null)
    {
        if($commentators === null) {
            $this->commentators = $commentators;
        }
        return $this;
    }

    /**
     * @param $condition
     * @return boolean
     */
    public function start($condition)
    {
        // TODO: Implement start() method.
    }

    /**
     * @param null $condition
     * @return boolean
     */
    public function end($condition = null)
    {
        // TODO: Implement end() method.
    }

    /**
     * @param $choices
     */
    public function interaction($choices)
    {
        // TODO: Implement interaction() method.
    }

    /**
     * @return mixes
     */
    public function results()
    {
        // TODO: Implement results() method.
    }
}