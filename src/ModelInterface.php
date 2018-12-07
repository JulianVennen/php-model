<?php

namespace Aternos\Model;

/**
 * Interface ModelInterface
 *
 * @author Matthias Neid
 * @package Aternos\Model\Driver
 */
interface ModelInterface
{
    /**
     * Get the name of the model used as table name etc.
     *
     * @return string
     */
    public static function getName(): string;

    /**
     * Return the caching time for the model (in seconds)
     *
     * @return int
     */
    public function getCacheTime(): int;

    /**
     * Get the id of the model
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Set the id of the model
     *
     * @param string $id
     * @return void
     */
    public function setId(string $id);

    /**
     * Get the name of the id field
     *
     * @return string
     */
    public function getIdField(): string;

    /**
     * Get a model by id
     *
     * @param string $id
     * @param bool $update
     * @return ModelInterface|bool
     */
    public static function get(string $id, bool $update = false);

    /**
     * Save a model
     *
     * @return bool
     */
    public function save(): bool;

    /**
     * Delete a model
     *
     * @return bool
     */
    public function delete(): bool;
}