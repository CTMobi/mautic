<?php

/*
 * @copyright   2016 Mautic Contributors. All rights reserved
 * @author      Mautic, Inc.
 *
 * @link        https://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace Mautic\UserBundle\Tests\Entity;

use Mautic\UserBundle\Entity\User;

class UserTest extends \PHPUnit\Framework\TestCase
{
    public function testUserIsGuest()
    {
        $user = new User(true);
        $this->assertTrue($user->isGuest());
    }

    public function testUserIsNotGuest()
    {
        $user = new User();
        $this->assertFalse($user->isGuest());
    }

    public function testSetAutomaticPassword()
    {
        $user = new User();
        $user->setAutomaticPassword(true);

        $this->assertTrue($user->getAutomaticPassword());
    }
}
