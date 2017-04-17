<?php
/**
 * Created by PhpStorm.
 * User: aigie
 * Date: 17/04/2017
 * Time: 10:45
 */

namespace Tests\LinksBundle\Form\DataTransformer;


use BJ\LinksBundle\Entity\Tag;
use BJ\LinksBundle\Form\DataTransformer\TagsTransformer;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityRepository;
use PHPUnit\Framework\TestCase;

class TagsTransformerTest extends TestCase
{
    public function testCreateTagsArrayFromString()
    {
        $tags = $this->getMockedTransformer()->reverseTransform('hello, demo');
        $this->assertCount(2, $tags);
        $this->assertSame('demo', $tags[1]->getName());
    }

    public function testUseAlreadyDefinedTags()
    {
        $tag = new Tag();
        $tag->setName('chat');

        $tags = $this->getMockedTransformer([$tag])->reverseTransform('chat, chien');
        $this->assertCount(2, $tags);
        $this->assertSame($tag, $tags[0]);
    }

    public function testRemoveEmptyTags()
    {
        $tags = $this->getMockedTransformer()->reverseTransform('hello,, demo, , , ');
        $this->assertCount(2, $tags);
        $this->assertSame('demo', $tags[1]->getName());
    }

    public function testRemoveDuplicateTags()
    {
        $tags = $this->getMockedTransformer()->reverseTransform('demo, demo, , demo');
        $this->assertCount(1, $tags);
    }

    private function getMockedTransformer($result = [])
    {
        $tagRepository = $this->getMockBuilder(EntityRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
        $tagRepository->expects($this->any())
            ->method('findBy')
            ->will($this->returnValue($result));

        $entityManager = $this->getMockBuilder(ObjectManager::class)
            ->disableOriginalConstructor()
            ->getMock();

        $entityManager->expects($this->any())
            ->method('getRepository')
            ->will($this->returnValue($tagRepository));

        return new TagsTransformer($entityManager);
    }
}
