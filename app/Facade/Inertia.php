<?php

namespace App\Facade;

use Illuminate\Support\Facades\Facade;


/**
 * @method static \Inertia\Response render(RenderLayout $layout, string $page, array $words = [], array $props = [], ?string $module = null) Render inertia page.
 */
class Inertia extends Facade
{
  protected static function getFacadeAccessor(): string
  {
    return "Inertia";
  }
}
