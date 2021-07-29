<?php declare(strict_types=1);

namespace Arcanesoft\Shop\Console;

use Arcanesoft\Foundation\Support\Console\PublishCommand as Command;

/**
 * Class     PublishCommand
 *
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class PublishCommand extends Command
{
    /**
     * Handle the command.
     *
     * @return int
     */
    public function handle(): int
    {
        return static::SUCCESS;
    }
}
