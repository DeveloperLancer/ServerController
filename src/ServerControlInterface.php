<?php declare(strict_types=1);
/**
 * @author Jakub Gniecki
 * @copyright Jakub Gniecki <kubuspl@onet.eu>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DevLancer\ServerController;


interface ServerControlInterface
{
    public function start(LocatorInterface $locator, int $port, string $cmd, array $parameters = []): bool;
    public function stop(int $port, string $cmd): bool;
}