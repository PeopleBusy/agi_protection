<?php

namespace AgiBundle\DataFixtures\ORM;

use AgiBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUserData implements FixtureInterface, ContainerAwareInterface
{
    private $container;

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {

        //Admin username: agi-admin  ---> password: agi@admin.2017 ---> Nom: AGI   prenom: Administrateur
        //User username: agi-user  ----> password: agi@user.2017 ---> Nom: AGI   prenom: Utilisateur

        $user = new User();
        $user->setAuteur("ADMIN");
        $user->setNom("AGI");
        $user->setPrenom("Administrateur");

        $user->setUsername("agi-admin");
        $user->setIsActive(true);
        $user->setRoles(array('ROLE_ADMIN'));

        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($user, "agi@admin.2017");
        $user->setPassword($password);
        $user->setDateCreation(new \DateTime());

        /////////////////////////////////////////////////////////////////////////

        $user1 = new User();
        $user1->setAuteur("ADMIN");
        $user1->setNom("AGI");
        $user1->setPrenom("Utilisateur");

        $user1->setUsername("agi-user");
        $user1->setIsActive(true);
        $user1->setRoles(array('ROLE_USER'));

        $password1 = $encoder->encodePassword($user1, "agi@user.2017");
        $user1->setPassword($password1);
        $user1->setDateCreation(new \DateTime());

        $manager->persist($user);
        $manager->persist($user1);
        $manager->flush();
    }

    /**
     * Sets the container.
     *
     * @param ContainerInterface|null $container A ContainerInterface instance or null
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
}