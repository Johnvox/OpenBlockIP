<?php

namespace BlockIP\PeopleBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BlockIPPeopleBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
