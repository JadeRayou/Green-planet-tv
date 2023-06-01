<?php

namespace App\DataFixtures;

use App\Entity\User;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private $encoder;
    public function __construct(UserPasswordHasherInterface $encoder){
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail('tsheehan.rayou@gmail.com');
        $user->setPassword($this->encoder->hashPassword($user, 'pass'));
        $user->setRoles(['ROLE_USER', 'ROLE_ADMIN']);
        $user->setIsVerified(true);
        $user->setUpdatedAt(new DateTimeImmutable());
        $user->setSlug('jade');
        $manager->persist($user);

        $user = new User();
        $user->setEmail('shinvaleriya1808@gmail.com');
        $user->setPassword($this->encoder->hashPassword($user, 'pass'));
        $user->setRoles(['ROLE_USER', 'ROLE_ADMIN']);
        $user->setIsVerified(true);
        $user->setUpdatedAt(new DateTimeImmutable());
        $user->setSlug('valeriya');
        $manager->persist($user);

        $user = new User();
        $user->setEmail('lyly.lou2013@gmail.com');
        $user->setPassword($this->encoder->hashPassword($user, 'pass'));
        $user->setRoles(['ROLE_USER', 'ROLE_ADMIN']);
        $user->setIsVerified(true);
        $user->setUpdatedAt(new DateTimeImmutable());
        $user->setSlug('lyly');
        $manager->persist($user);

        $user = new User();
        $user->setEmail('danielletang111@gmail.com');
        $user->setPassword($this->encoder->hashPassword($user, 'pass'));
        $user->setRoles(['ROLE_USER', 'ROLE_ADMIN']);
        $user->setIsVerified(true);
        $user->setUpdatedAt(new DateTimeImmutable());
        $user->setSlug('danielle');
        $manager->persist($user);

        $manager->flush();
    }
}
