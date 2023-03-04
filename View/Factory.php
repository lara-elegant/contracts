<?php

namespace Elegant\Contracts\View;

use Elegant\Contracts\Support\Arrayable;

interface Factory
{
    /**
     * Determine if a given view exists.
     *
     * @param string $view
     * @return bool
     */
    public function exists($view);

    /**
     * Get the evaluated view contents for the given path.
     *
     * @param string $path
     * @param Arrayable|array $data
     * @param array $mergeData
     * @return \Elegant\Contracts\View\View
     */
    public function file($path, $data = [], $mergeData = []);

    /**
     * Get the evaluated view contents for the given view.
     *
     * @param string $view
     * @param Arrayable|array $data
     * @param array $mergeData
     * @return \Elegant\Contracts\View\View
     */
    public function make($view, $data = [], $mergeData = []);

    /**
     * Add a piece of shared data to the environment.
     *
     * @param array|string $key
     * @param mixed $value
     * @return mixed
     */
    public function share($key, $value = null);

    /**
     * Add a new namespace to the loader.
     *
     * @param string $namespace
     * @param string|array $hints
     * @return $this
     */
    public function addNamespace($namespace, $hints);

    /**
     * Replace the namespace hints for the given namespace.
     *
     * @param string $namespace
     * @param string|array $hints
     * @return $this
     */
    public function replaceNamespace($namespace, $hints);
}
