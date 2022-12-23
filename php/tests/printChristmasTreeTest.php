<?php declare(strict_types=1);

namespace KataTests;

use Kata\TheClass;
use PHPUnit\Framework\TestCase;

function printChristmasTree(int $height): string
{
    return <<<'TEX'
 x
xxx
 |
TEX;
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
}
