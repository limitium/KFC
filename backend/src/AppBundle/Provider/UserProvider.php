<?php
namespace AppBundle\Provider;

use AppBundle\Entity\User;
use Doctrine\ORM\EntityManager;
use IMAG\LdapBundle\Manager\LdapManagerUserInterface;
use IMAG\LdapBundle\Provider\LdapUserProvider;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;


use JMS\DiExtraBundle\Annotation\Inject;
use JMS\DiExtraBundle\Annotation\InjectParams;
use JMS\DiExtraBundle\Annotation\Service;

/**
 * Class UserProvider
 * @package AppBundle\Provider
 * @Service("imag_ldap.security.user.provider")
 */
class UserProvider extends LdapUserProvider
{
    private $em;
    private $cache = [];

    /**
     * @InjectParams({
     *     "em" = @Inject("doctrine.orm.entity_manager"),
     *     "ldapManager" = @Inject("imag_ldap.ldap_manager"),
     *     "bindUsernameBefore" = @Inject("%imag_ldap.authentication.bind_username_before%"),
     *     "userClass" = @Inject("%imag_ldap.model.user_class%")
     * })
     * @param EntityManager $em
     * @param LdapManagerUserInterface $ldapManager
     * @param bool $bindUsernameBefore
     * @param $userClass
     */
    public function __construct(EntityManager $em, LdapManagerUserInterface $ldapManager, $bindUsernameBefore = false, $userClass)
    {
        parent::__construct($ldapManager, $bindUsernameBefore, $userClass);
        $this->em = $em;
    }

    public function loadUserByUsername($username)
    {
        $ldapUser = parent::loadUserByUsername($username);
        $this->mergeFromDb($ldapUser);
        return $ldapUser;
    }

    public function refreshUser(UserInterface $user)
    {
        $ldapUser = parent::refreshUser($user);
        $this->mergeFromDb($ldapUser);
        return $ldapUser;
    }

    /**
     * @param $ldapUser
     */
    private function mergeFromDb(User $ldapUser)
    {
        $dbUser = $this->loadUser($ldapUser);

        if (!$dbUser) {
            throw new UsernameNotFoundException();
        }
        $this->merge($ldapUser, $dbUser);
    }

    /**
     * @param User $ldapUser
     * @return null|object
     */
    private function loadUser(User $ldapUser)
    {
        if (array_key_exists($ldapUser->getUsername(), $this->cache)) {
            $dbUser = $this->cache[$ldapUser->getUsername()];
            return $dbUser;
        }
        $dbUser = $this->em->getRepository("AppBundle:User")->findOneBy(['dbUsername' => $ldapUser->getUsername()]);
        $this->cache[$ldapUser->getUsername()] = $dbUser;
        return $dbUser;
    }

    /**
     * @param User $ldapUser
     * @param $dbUser
     */
    private function merge(User $ldapUser, User $dbUser)
    {
        $ldapUser->setId($dbUser->getId());
        $ldapUser->setDbUsername($dbUser->getDbUsername());
    }
}