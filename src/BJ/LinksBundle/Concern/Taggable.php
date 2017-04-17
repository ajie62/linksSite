<?php
/**
 * Created by PhpStorm.
 * User: aigie
 * Date: 16/04/2017
 * Time: 14:31
 */

namespace BJ\LinksBundle\Concern;


use BJ\LinksBundle\Entity\Tag;

trait Taggable
{
    // http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/association-mapping.html#many-to-many-bidirectional
    /**
     * @ORM\ManyToMany(targetEntity="BJ\LinksBundle\Entity\Tag", cascade={"persist"})
     */
    private $tags;

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param Tag $tag
     * @return $this
     */
    public function addTag(Tag $tag)
    {
        $this->tags[] = $tag;
        return $this;
    }

    /**
     * @param Tag $tag
     * @return $this
     */
    public function removeTag(Tag $tag)
    {
        $this->tags->removeElement($tag);
        return $this;
    }

}
