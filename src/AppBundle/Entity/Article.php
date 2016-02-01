<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table
 */
class Article
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $authorPicture;

    /**
     * @ORM\Column(type="text")
     */
    private $authorPosition;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $authorTwitter;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new \Datetime();
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getAuthorPicture()
    {
        return $this->authorPicture;
    }

    /**
     * @param mixed $authorPicture
     */
    public function setAuthorPicture($authorPicture)
    {
        $this->authorPicture = $authorPicture;
    }

    /**
     * @return mixed
     */
    public function getAuthorPosition()
    {
        return $this->authorPosition;
    }

    /**
     * @param mixed $authorPosition
     */
    public function setAuthorPosition($authorPosition)
    {
        $this->authorPosition = $authorPosition;
    }

    /**
     * @return mixed
     */
    public function getAuthorTwitter()
    {
        return $this->authorTwitter;
    }

    /**
     * @param mixed $authorTwitter
     */
    public function setAuthorTwitter($authorTwitter)
    {
        $this->authorTwitter = $authorTwitter;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }
}