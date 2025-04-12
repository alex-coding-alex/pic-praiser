<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;

class PostPruneCommand extends Command
{
    protected $signature = 'post:prune';

    protected $description = 'Prune posts older than 24 hours';

    public function handle(): void
    {
        // Posts older than 24 hours
        $oldPosts = Post::where('created_at', '<', now()->subDays(1));
        $oldPosts->delete();
    }
}
