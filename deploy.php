<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'git@github.com:AgentFUD/dataninja.xyz.git');
// set('sub_directory', 'src');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('dataninja.xyz')
    ->set('remote_user', 'pezo')
    ->set('branch', 'main')
    ->set('deploy_path', '/var/www/dataninja.xyz');

// Hooks
after('deploy:failed', 'deploy:unlock');
