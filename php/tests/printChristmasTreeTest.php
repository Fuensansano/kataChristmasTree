<?php declare(strict_types=1);

namespace KataTests;

use Kata\TheClass;
use PHPUnit\Framework\TestCase;

function printChristmasTree(int $height): string
{
    $tree = "";

    for ($i = 0, $spacesNumber = $height - 1, $leaves = 1; $i < $height; $i++, $spacesNumber--, $leaves += 2) {
        $tree .= str_repeat(" ", $spacesNumber);
        $tree .= str_repeat('x', $leaves);
        $tree .= "\n";
    }

    $tree .= str_repeat(" ", $height - 1);

    $tree .= '|';
    return $tree;
}

class printChristmasTreeTest extends TestCase
{
    /** @test */
    public function give_height_of_two_we_expect_to_have_a_tree_of_two_rows_of_leaves(): void
    {
        $expected = <<<'TEX'
 x
xxx
 |
TEX;

        $actualResult = printChristmasTree(2);

        self::assertSame($expected, $actualResult);
    }

    /** @test */
    public function give_height_of_three_we_expect_to_have_a_tree_of_three_rows_of_leaves(): void
    {
        $expected = <<<'TEX'
  x
 xxx
xxxxx
  |
TEX;

        $actualResult = printChristmasTree(3);

        self::assertSame($expected, $actualResult);
    }


    /** @test */
    public function give_height_of_four_we_expect_to_have_a_tree_of_four_rows_of_leaves(): void
    {
        $expected = <<<'TEX'
       x
      xxx
     xxxxx
    xxxxxxx
       |
    TEX;

        $actualResult = printChristmasTree(4);

        self::assertSame($expected, $actualResult);
    }
}
