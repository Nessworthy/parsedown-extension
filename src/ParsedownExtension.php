<?php declare(strict_types=1);

namespace Nessworthy\ParsedownExtension;

/**
 * Represents a basic parsedown extension.
 * Please implement ParsedownInlineExtension or ParsedownBlockExtension instead.
 * @package Nessworthy\ParsedownExtensionManager
 */
interface ParsedownExtension
{
    /**
     * Return the starting character for your markdown extension.
     * E.g. for '::warning::', return ':'.
     * @return string
     */
    public function getStartingCharacter(): string;
}