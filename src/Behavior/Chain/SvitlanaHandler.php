<?php

namespace Patterns\Behavior\Chain;

class SvitlanaHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === "Svitlana") {
            return "Svitlana says: Hi, my name is " . $request . "!<br />";
        } else {
            return parent::handle($request);
        }
    }

}
