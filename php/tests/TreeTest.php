<?php declare(strict_types=1);

namespace KataTests;

use PHPUnit\Framework\TestCase;
use Kata\Tree;

class treeTest extends TestCase
{
    /** @test */
    public function give_height_of_two_we_expect_to_have_a_tree_of_two_rows_of_leaves(): void
    {
        $expected = <<<'TEX'
 x
xxx
 |
TEX;

        $actualResult = (new Tree())->build(2);

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

        $actualResult = (new Tree())->build(3);

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

        $actualResult = (new Tree())->build(4);

        self::assertSame($expected, $actualResult);
    }
}
