<?php

namespace MDW\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MDW\DemoBundle\Entity\Comments
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MDW\DemoBundle\Entity\CommentsRepository")
 */

class Comments
{
    /**
     * @ORM\ManyToOne(targetEntity="Articles", inversedBy="comments")
     * @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     * @return integer
     */
     private $article;
     public function setArticle(\MDW\DemoBundle\Entity\Articles $article)
     {
         $this->article = $article;
     }

     public function getArticle()
     {
         return $this->article;
     }

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $author
     *
     * @ORM\Column(name="author", type="string", length=255)
     */
    private $author;

    /**
     * @var string $content
     *
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;

    /**
     * @var integer $reply_to
     *
     * @ORM\Column(name="reply_to", type="integer")
     */
    private $reply_to;

    /**
     * @var integer $article_id
     *
     * @ORM\Column(name="article_id", type="integer")
     */
    private $article_id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Comments
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    
        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Comments
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set reply_to
     *
     * @param integer $replyTo
     * @return Comments
     */
    public function setReplyTo($replyTo)
    {
        $this->reply_to = $replyTo;
    
        return $this;
    }

    /**
     * Get reply_to
     *
     * @return integer 
     */
    public function getReplyTo()
    {
        return $this->reply_to;
    }

    /**
     * Set article_id
     *
     * @param integer $articleId
     * @return Comments
     */
    public function setArticleId($articleId)
    {
        $this->article_id = $articleId;
    
        return $this;
    }

    /**
     * Get article_id
     *
     * @return integer 
     */
    public function getArticleId()
    {
        return $this->article_id;
    }
}
