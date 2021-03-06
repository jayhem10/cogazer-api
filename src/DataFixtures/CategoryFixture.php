<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 6; $i++) {
            $category = new Category();
            $category->setTitle('Category '.$i);
            $category->setDescription('Description '.$i);
            $category->setImage('Image'.$i);
            $manager->persist($category);
        }
        $manager->flush();
    }
}
