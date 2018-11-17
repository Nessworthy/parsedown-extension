<?php declare(strict_types=1);

namespace Nessworthy\ParsedownExtension;

/**
 * Represents a block parsedown extension.
 * @package Nessworthy\ParsedownExtensionManager
 */
interface ParsedownBlockExtension extends ParsedownExtension
{
    /**
     * Called when your starting character is matched.
     * Return null when the rest of the line/block doesn't match what you expect.
     * Otherwise, return how you would a normal Parsedown extension
     * @see https://github.com/erusev/parsedown/wiki/Tutorial:-Create-Extensions#add-multi-line-element
     * @param $line
     * @param $block
     * @return array|null
     */
    public function start($line, array $block = null): ?array;

    /**
     * Called on each following line after starting until you set $block['complete'] to true.
     * @param $line
     * @param $block
     * @return array|null
     */
    public function continue($line, array $block): ?array;

    /**
     * Called after marking for completion.
     * @param $block
     * @return array|null
     */
    public function complete(array $block): ?array;
}