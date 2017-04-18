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
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use PHPUnit\Framework\TestCase;

class TagsTransformerTest extends TestCase
{
    // transform //
    public function testCreateStringFromArray()
    {
        $tags = $this->getMockedTransformer()->transform(array('hello', 'demo'));

        $this->assertTrue(is_string($tags));
        $this->assertSame('hello,demo', $tags);
    }

    // reverseTransform //
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

    // méthode nécessaire à nos tests //
    private function getMockedTransformer($result = [])
    {
        // Vu qu'on ne veut pas réellement interagir avec la bdd, on va créer un faux repository et un faux manager

        // On crée un mock d'EntityRepository
        $tagRepository = $this->getMockBuilder(EntityRepository::class)
            // On désactive son constructeur
            ->disableOriginalConstructor()
            ->getMock();
        // Ici, on explique qu'on attend la méthode findBy un nombre indéterminé de fois
        $tagRepository->expects($this->any())
            ->method('findBy')
            // Et qu'à chaque fois qu'elle sera appelée, elle devra renvoyer $result
            ->will($this->returnValue($result));

        // De même, on crée un mock d'EntityManager
        $entityManager = $this->getMockBuilder(EntityManager::class)
            ->disableOriginalConstructor()
            ->getMock();
        // Et on dit qu'à chaque fois que la méthode getRepository sera appelée, il devra renvoyer $tagRepository
        $entityManager->expects($this->any())
            ->method('getRepository')
            ->will($this->returnValue($tagRepository));

        return new TagsTransformer($entityManager);
    }
}
