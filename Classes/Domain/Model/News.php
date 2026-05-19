<?php

declare(strict_types=1);

namespace RichardHaeser\YoastSeoNews\Domain\Model;

use GeorgRinger\News\Domain\Model\FileReference;
use GeorgRinger\News\Domain\Model\News as NewsBase;
use TYPO3\CMS\Extbase\Annotation\ORM\Lazy;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class News extends NewsBase
{
    /**
     * @var string
     */
    protected string $ogTitle = '';

    /**
     * @var string
     */
    protected string $ogDescription = '';

    /**
     * @var ObjectStorage<FileReference>|null
     */
    #[Lazy]
    protected ?ObjectStorage $ogImage = null;

    /**
     * @var string
     */
    protected string $twitterTitle = '';

    /**
     * @var string
     */
    protected string $twitterDescription = '';

    /**
     * @var ObjectStorage<FileReference>|null
     */
    #[Lazy]
    protected ?ObjectStorage $twitterImage = null;

    /**
     * @return string
     */
    public function getOgTitle(): string
    {
        return $this->ogTitle;
    }

    /**
     * @param string $ogTitle
     */
    public function setOgTitle(string $ogTitle): void
    {
        $this->ogTitle = $ogTitle;
    }

    /**
     * @return string
     */
    public function getOgDescription(): string
    {
        return $this->ogDescription;
    }

    /**
     * @param string $ogDescription
     */
    public function setOgDescription(string $ogDescription): void
    {
        $this->ogDescription = $ogDescription;
    }

    /**
     * @return ObjectStorage<FileReference>
     */
    public function getOgImage(): ObjectStorage
    {
        if ($this->ogImage === null) {
            $this->ogImage = new ObjectStorage();
        }
        return $this->ogImage;
    }

    /**
     * @param ObjectStorage<FileReference> $ogImage
     */
    public function setOgImage(ObjectStorage $ogImage): void
    {
        $this->ogImage = $ogImage;
    }

    /**
     * @return string
     */
    public function getTwitterTitle(): string
    {
        return $this->twitterTitle;
    }

    /**
     * @param string $twitterTitle
     */
    public function setTwitterTitle(string $twitterTitle): void
    {
        $this->twitterTitle = $twitterTitle;
    }

    /**
     * @return string
     */
    public function getTwitterDescription(): string
    {
        return $this->twitterDescription;
    }

    /**
     * @param string $twitterDescription
     */
    public function setTwitterDescription(string $twitterDescription): void
    {
        $this->twitterDescription = $twitterDescription;
    }

    /**
     * @return ObjectStorage<FileReference>
     */
    public function getTwitterImage(): ObjectStorage
    {
        if ($this->twitterImage === null) {
            $this->twitterImage = new ObjectStorage();
        }
        return $this->twitterImage;
    }

    /**
     * @param ObjectStorage<FileReference> $twitterImage
     */
    public function setTwitterImage(ObjectStorage $twitterImage): void
    {
        $this->twitterImage = $twitterImage;
    }
}
