<?php

namespace Infocorp\Entity;

class Trainee
{
	protected $id;

	protected $name;

	protected $email;

	protected $phone;

	protected $course;

	protected $pontosFracos;

	protected $pontosFortes;

	protected $experiences;

	protected $field;

    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of name.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the value of name.
     *
     * @param mixed $name the name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets the value of email.
     *
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the value of email.
     *
     * @param mixed $email the email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Gets the value of phone.
     *
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets the value of phone.
     *
     * @param mixed $phone the phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Gets the value of course.
     *
     * @return mixed
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Sets the value of course.
     *
     * @param mixed $course the course
     *
     * @return self
     */
    public function setCourse($course)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Gets the value of pontosFracos.
     *
     * @return mixed
     */
    public function getPontosFracos()
    {
        return $this->pontosFracos;
    }

    /**
     * Sets the value of pontosFracos.
     *
     * @param mixed $pontosFracos the pontosFracos
     *
     * @return self
     */
    public function setPontosFracos($pontosFracos)
    {
        $this->pontosFracos = $pontosFracos;

        return $this;
    }

    /**
     * Gets the value of pontosFortes.
     *
     * @return mixed
     */
    public function getPontosFortes()
    {
        return $this->pontosFortes;
    }

    /**
     * Sets the value of pontosFortes.
     *
     * @param mixed $pontosFortes the pontosFortes
     *
     * @return self
     */
    public function setPontosFortes($pontosFortes)
    {
        $this->pontosFortes = $pontosFortes;

        return $this;
    }

    /**
     * Gets the value of experiences.
     *
     * @return mixed
     */
    public function getExperiences()
    {
        return $this->experiences;
    }

    /**
     * Sets the value of experiences.
     *
     * @param mixed $experiences the experiences
     *
     * @return self
     */
    public function setExperiences($experiences)
    {
        $this->experiences = $experiences;

        return $this;
    }

    /**
     * Gets the value of field.
     *
     * @return mixed
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Sets the value of field.
     *
     * @param mixed $field the field
     *
     * @return self
     */
    public function setField($field)
    {
        $this->field = $field;

        return $this;
    }
}