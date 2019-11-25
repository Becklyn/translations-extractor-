<?php declare(strict_types=1);

namespace Becklyn\TranslationsExtractor\Extractor\Twig;

use Twig\Extension\AbstractExtension;

class MockExtension extends AbstractExtension
{
    /**
     * @var array
     */
    private $functions;


    /**
     * @var array
     */
    private $filters;


    /**
     * @var array
     */
    private $tests;


    /**
     * @param array $functions
     * @param array $filters
     * @param array $tests
     */
    public function __construct (array $functions, array $filters, array $tests)
    {
        $this->functions = $functions;
        $this->filters = $filters;
        $this->tests = $tests;
    }


    public function getFilters ()
    {
        return parent::getFilters(); // TODO: Change the autogenerated stub
    }


    public function getTests ()
    {
        return parent::getTests(); // TODO: Change the autogenerated stub
    }


    public function getFunctions ()
    {
        return parent::getFunctions(); // TODO: Change the autogenerated stub
    }


}
