<?php

namespace Unifesspa\Ru\Users\DataProviders\Database\Postgres;

use Doctrine\ORM\Mapping as ORM;

class User
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="string")
     */
    private string $id;
    /**
     *  @ORM\Column(type="string", length="20")
     */
    private string $username;
    /**
     *  @ORM\Column(type="string", length="200")
     */
    private string $email;
    /**
     *  @ORM\Column(type="string", length="200")
     */
    private string $password;
    /**
     *  @ORM\Column(type="bolean")
     */
    private bool $active;
    private \DateTimeImmutable $createdAt;
    private \DateTimeImmutable $inactivatedAt;
    private \DateTimeInterface $updatedAt;
}