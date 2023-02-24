<?php

namespace App\DataFixtures;

use App\Entity\Player;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class PlayerFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $player = $this->generatePlayer();

        $manager->persist($player);

        $manager->flush();
    }

    private function generatePlayer()
    {
        $player = new Player();

        $player->setPseudo("lyoko");

        return  $player;
    }
}
