<?php declare(strict_types=1);

namespace Nessworthy\ParsedownExtension;

/**
 * Represents an inline parsedown extension.
 * @package Nessworthy\ParsedownExtensionManager
 */
interface ParsedownInlineExtension extends ParsedownExtension
{
    /**
     * Return the starting character for your markdown extension.
     * E.g. for '::warning::', return ':'.
     * @return string
     */
    public function getStartingCharacter(): string;

    /**
     * Called when your starting character is matched.
     * Return null when the rest of the line/block doesn't match what you expect.
     * Otherwise, return how you would a normal Parsedown extension.
     * @see https://github.com/erusev/parsedown/wiki/Tutorial:-Create-Extensions#add-inline-element
     * @param array $excerpt
     * @return array|null
     */
    public function run(array $excerpt): ?array;
}