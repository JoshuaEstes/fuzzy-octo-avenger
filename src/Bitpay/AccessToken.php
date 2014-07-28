<?php

namespace Bitpay;

/**
 */
class AccessToken implements AccessTokenInterface
{

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $label;

    /**
     * @var boolean
     */
    protected $useNonce;

    /**
     * @param string $id
     *
     * @return AccessTokenInterface
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $email
     *
     * @return AccessTokenInterface
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $label
     *
     * @return AccessTokenInterface
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @inheritdoc
     */
    public function isNonceDisabled()
    {
        return $this->useNonce;
    }
}
