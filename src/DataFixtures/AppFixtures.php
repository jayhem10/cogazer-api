<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\User;
use App\Entity\Collection;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 6; $i++) {
            $category = new Category();
            $category->setTitle('Category '.$i);
            $category->setDescription('Description '.$i);
            $manager->persist($category);
        }
        $manager->flush();
        for ($i = 0; $i < 10; $i++) {
            $user = new User();
            $user->setPseudo('Pseudo '.$i);
            $user->setPassword('Password'.$i);
            $user->setEmail('test '.$i. '@gmail.com');
            $manager->persist($user);
        }
        $manager->flush();
        for ($i = 0; $i < 6; $i++) {
            $collection = new Collection();
            $collection->setTitle('Titre '.$i);
            $collection->setAuthor('Auteur '.$i);
            $collection->setEdition('Edition '.$i. '@gmail.com');
            $collection->setReference('Reference '.$i. '@gmail.com');
            $collection->setYear(2021);
            $collection->setImage('https://images-na.ssl-images-amazon.com/images/I/71%2BEqLAZVBL._SL1200_.jpg');
            $collection->setNote(15);
            $collection->setCategory($category);
            $collection->setUser($user);
            $manager->persist($collection);
        }
        $manager->flush();
    }
}
