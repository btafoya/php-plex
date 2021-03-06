<?php

namespace Wubs\Plex\Exception\Server;

use Wubs\Plex\Exception\ExceptionAbstract;

/**
 * Plex Exception (Plexception)
 *
 * @category plex
 * @package Plex_Exception
 * @author <nickbart@gmail.com> Nick Bartkowiak
 * @copyright (c) 2013 Nick Bartkowiak
 * @license http://www.gnu.org/licenses/gpl-3.0.html GNU Public Licence (GPLv3)
 * @version 0.0.2
 *
 * This file is part of plex.
 *
 * plex is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * plex is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */


/**
 * Exception to be thrown for any problems at the library level.
 *
 * @category plex
 * @package Plex_Exception
 * @author <nickbart@gmail.com> Nick Bartkowiak
 * @copyright (c) 2013 Nick Bartkowiak
 * @license http://www.gnu.org/licenses/gpl-3.0.html GNU Public Licence (GPLv3)
 * @version 0.0.2
 */
class Library extends ExceptionAbstract
{
    /**
     * List of valid exception types for the library exception class.
     * @var mixed[]
     */
    protected $validTypes = array(
        // Abstract type for specifiying that a resource of type and name was
        // not found.
        'RESOURCE_NOT_FOUND' => array(
            'code' => 404,
            'message' => 'The %s "%s" was not found.'
        )
    );
}
