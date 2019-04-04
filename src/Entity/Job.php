<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\JobRepository")
 */
class Job
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $customer_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $salesman_id;

    /**
     * @ORM\Column(type="string", length=1024, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $fan;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $job_cost;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $rate;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $sale_date;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $install_date;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $completion_date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCustomerId(): ?int
    {
        return $this->customer_id;
    }

    public function setCustomerId(int $customer_id): self
    {
        $this->customer_id = $customer_id;

        return $this;
    }

    public function getSalesmanId(): ?int
    {
        return $this->salesman_id;
    }

    public function setSalesmanId(int $salesman_id): self
    {
        $this->salesman_id = $salesman_id;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getFan(): ?int
    {
        return $this->fan;
    }

    public function setFan(?int $fan): self
    {
        $this->fan = $fan;

        return $this;
    }

    public function getJobCost(): ?float
    {
        return $this->job_cost;
    }

    public function setJobCost(?float $job_cost): self
    {
        $this->job_cost = $job_cost;

        return $this;
    }

    public function getRate(): ?float
    {
        return $this->rate;
    }

    public function setRate(?float $rate): self
    {
        $this->rate = $rate;

        return $this;
    }

    public function getSaleDate(): ?\DateTimeInterface
    {
        return $this->sale_date;
    }

    public function setSaleDate(?\DateTimeInterface $sale_date): self
    {
        $this->sale_date = $sale_date;

        return $this;
    }

    public function getInstallDate(): ?\DateTimeInterface
    {
        return $this->install_date;
    }

    public function setInstallDate(?\DateTimeInterface $install_date): self
    {
        $this->install_date = $install_date;

        return $this;
    }

    public function getCompletionDate(): ?\DateTimeInterface
    {
        return $this->completion_date;
    }

    public function setCompletionDate(?\DateTimeInterface $completion_date): self
    {
        $this->completion_date = $completion_date;

        return $this;
    }
}
