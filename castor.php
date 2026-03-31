<?php

declare(strict_types=1);

use Castor\Attribute\AsTask;

use function Castor\io;
use function Castor\run;

#[AsTask(description: 'Build and start the Docker containers')]
function install(): void
{
    io()->title('Installing project...');
    run('docker-compose build');
    start();
}

#[AsTask(description: 'Start the Docker containers')]
function start(): void
{
    io()->title('Starting Docker containers...');
    run('docker-compose up -d');
    io()->success('Containers started. Site available at http://localhost:8086');
}

#[AsTask(description: 'Stop the Docker containers')]
function stop(): void
{
    io()->title('Stopping Docker containers...');
    run('docker-compose down');
    io()->success('Containers stopped.');
}

#[AsTask(description: 'Restart the Docker containers')]
function restart(): void
{
    stop();
    start();
}

#[AsTask(description: 'Open a bash shell in the Apache container')]
function connect(): void
{
    run('docker-compose exec apache bash', tty: true);
}

#[AsTask(description: 'Show logs from the Apache container')]
function logs(): void
{
    run('docker-compose logs -f apache', tty: true);
}

#[AsTask(description: 'Show Docker containers status')]
function status(): void
{
    run('docker-compose ps');
}

#[AsTask(description: 'Remove containers, images and volumes (full reset)')]
function destroy(): void
{
    io()->warning('This will remove all containers and built images.');

    if (!io()->confirm('Are you sure?', false)) {
        io()->note('Aborted.');

        return;
    }

    run('docker-compose down --rmi all --volumes --remove-orphans');
    io()->success('Environment destroyed.');
}