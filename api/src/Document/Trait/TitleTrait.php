<?php

declare(strict_types = 1);

namespace App\Document\Trait;

use ApiPlatform\Metadata\ApiProperty;
use App\Document\DocumentInterface;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Symfony\Component\Validator\Constraints as Assert;

trait TitleTrait
{
	#[ApiProperty(writable: true)]
	#[ODM\Field(type: 'string', nullable: false)]
	#[Assert\NotBlank]
	protected string $title;

	public function getTitle(): string
	{
		return $this->title;
	}

	public function setTitle(string $title): DocumentInterface
	{
		$this->title = $title;

		return $this;
	}
}