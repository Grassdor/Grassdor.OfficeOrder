<?php

namespace App\Entity;

use App\Repository\GeneralOrdersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GeneralOrdersRepository::class)]
class GeneralOrders
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $order_date = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrderDate(): ?\DateTimeInterface
    {
        return $this->order_date;
    }

    public function setOrderDate(\DateTimeInterface $order_date): static
    {
        $this->order_date = $order_date;

        return $this;
    }
}
