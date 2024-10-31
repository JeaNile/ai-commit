<?php

declare(strict_types=1);

/**
 * This file is part of the guanguans/ai-commit.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace App\Support;

use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Utils;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Client\Response;
use Psr\Http\Message\ResponseInterface;

/**
 * @see https://bigmodel.cn/dev/howuse/introduction
 */
final class BigModel extends FoundationSDK
{

    protected function validateConfig(array $config): array
    {
        // TODO: Implement validateConfig() method.
        return [];
    }
}
