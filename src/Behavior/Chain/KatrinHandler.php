<?php

namespace Patterns\Behavior\Chain;

class KatrinHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === "Katrin") {
            return "Katrin says: Hi, my name is " . $request . "!<br />";
        } else {
            return parent::handle($request);
        }
    }

}