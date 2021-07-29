<?php declare(strict_types=1);

namespace Arcanesoft\Shop\Console;

use Illuminate\Console\Command;

/**
 * Class     InstallCommand
 *
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class InstallCommand extends Command
{
    /* -----------------------------------------------------------------
     |  Main Methods
     | -----------------------------------------------------------------
     */

    /**
     * Handle the command.
     */
    public function handle(): int
    {
        return static::SUCCESS;
    }
}
