<?php declare(strict_types=1);

namespace KataTests;

use PHPUnit\Framework\TestCase;
use Kata\Tree;

class TreeTest extends TestCase
{

    function providerTreeBuilder(): \Generator
    {
        yield 'Given a height of two' => [ 2, <<<'TEX'
             x
            xxx
             |
            TEX ];

        yield 'Given a height of three' => [ 3, <<<'TEX'
              x
             xxx
            xxxxx
              |
            TEX ];

        yield 'Given a height of four' => [ 4, <<<'TEX'
               x
              xxx
             xxxxx
            xxxxxxx
               |
            TEX ];
    }

    /**
     * @dataProvider providerTreeBuilder
     * @test
     */
    public function given_a_height_we_expect_to_have_the_same_amount_of_rows(int $height, string $expectedTree): void
    {

        $actualResult = (new Tree())->build($height);

        self::assertSame($expectedTree, $actualResult);
    }
}
