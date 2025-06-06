<?php
/**
 * This file is part of FacturaScripts
 * Copyright (C) 2017-2025 Carlos Garcia Gomez <carlos@facturascripts.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */
namespace FacturaScripts\Plugins\Modelo347\Extension\Model;

use Closure;

/**
 * Auxiliar class for special actions into the supplier.
 *   - Set excluir347 initial value.
 *
 * @author Jose Antonio Cuello Principal  <yopli2000@gmail.com>
 *
 * @property bool excluir347
 */
class Proveedor
{
    public function clear(): Closure
    {
        return function () {
            $this->excluir347 = false;
        };
    }
}
