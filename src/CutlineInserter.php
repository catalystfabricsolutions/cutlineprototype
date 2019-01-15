<?php
/**
 * Created by PhpStorm.
 * User: breic
 * Date: 8/16/2018
 * Time: 12:01 AM
 */

class CutlineInserter
{
    /**
     * The path to the image file.
     *
     * @var string
     */
    protected $imageFile;

    /**
     * The path to the template that provides cut lines.
     *
     * @var string
     */
    protected $cutLineFile;

    public function __construct(string $imageFile, string $cutLineFile)
    {

    }

    /**
     * @return string
     */
    public function getImageFile(): string
    {
        return $this->imageFile;
    }

    /**
     * @param string $imageFile
     */
    public function setImageFile(string $imageFile): void
    {
        $this->imageFile = $imageFile;
    }

    /**
     * @return string
     */
    public function getCutLineFile(): string
    {
        return $this->cutLineFile;
    }

    /**
     * @param string $cutLineFile
     */
    public function setCutLineFile(string $cutLineFile): void
    {
        $this->cutLineFile = $cutLineFile;
    }
}