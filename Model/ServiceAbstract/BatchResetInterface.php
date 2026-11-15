<?php
/**
 * Copyright © Byte8 Ltd. All rights reserved.
 * See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Byte8\Profile\Model\ServiceAbstract;

/**
 * Implemented by profile services (type processors, generators, validators, processors) that
 * accumulate state across the entities of one batch.
 */
interface BatchResetInterface
{
    /**
     * Discard state accumulated for the batch that has just been processed. The owning service
     * calls this at every batch boundary, before the next batch's entities are loaded, when
     * every entity of the previous batch has already been persisted or has failed.
     *
     * @return void
     */
    public function resetBatchState(): void;
}
