<?php

namespace Kata;

final class Tree
{
    private const SPACES = ' ';
    private const LEAF = 'x';
    private const TRUNK = '|';
    private const END_OF_BRANCH = "\n";
    private string $tree = '';

    public function build(int $height): string
    {
        $this->buildTop($height);
        $this->buildTrunk($height);

        return $this->tree;
    }

    private function buildTop(int $height): void
    {
        for ($branch = 0, $spacesNumber = $height - 1, $leaves = 1; $branch < $height; $branch++, $spacesNumber--, $leaves += 2) {
            $this->tree .= str_repeat(self::SPACES, $spacesNumber);
            $this->tree .= str_repeat(self::LEAF, $leaves);
            $this->tree .= self::END_OF_BRANCH;
        }
    }

    private function buildTrunk(int $height): void
    {
        $this->tree .= str_repeat(self::SPACES, $height - 1);
        $this->tree .= self::TRUNK;
    }

}
