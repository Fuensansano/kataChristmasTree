<?php declare(strict_types=1);

namespace KataTests;

use Kata\TheClass;
use PHPUnit\Framework\TestCase;

function buildTree(int $height): string
{
    $tree = "";

    $tree .= buildTreeTop($height);
    $tree .= buildTreeTrunk($height);

    return $tree;
}

function buildTreeTrunk(int $height): string
{
    $tree = '';
    $tree .= str_repeat(' ', $height - 1);
    $tree .= '|';

    return $tree;
}

function buildTreeTop(int $height): string
{
    $tree = '';
    for ($branch = 0, $spacesNumber = $height - 1, $leaves = 1; $branch < $height; $branch++, $spacesNumber--, $leaves += 2) {
        $tree .= str_repeat(' ', $spacesNumber);
        $tree .= str_repeat('x', $leaves);
        $tree .= "\n";
    }
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

        $actualResult = buildTree(2);

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

        $actualResult = buildTree(3);

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

        $actualResult = buildTree(4);

        self::assertSame($expected, $actualResult);
    }
}
