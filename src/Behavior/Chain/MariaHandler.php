<?php

namespace Patterns\Behavior\Chain;

class MariaHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === "Maria") {
            return "Maria says: Hi, my name is " . $request . "!<br />";
        } else {
            return parent::handle($request);
        }
    }

}