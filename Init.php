<?php
/**
 * This file is part of Modelo347 plugin for FacturaScripts
 * Copyright (C) 2020-2025 Carlos Garcia Gomez <carlos@facturascripts.com>
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

namespace FacturaScripts\Plugins\Modelo347;

use FacturaScripts\Core\Base\AjaxForms\PurchasesHeaderHTML;
use FacturaScripts\Core\Base\AjaxForms\SalesHeaderHTML;
use FacturaScripts\Core\Template\InitClass;
use FacturaScripts\Dinamic\Model\FacturaCliente;
use FacturaScripts\Dinamic\Model\FacturaProveedor;
use FacturaScripts\Dinamic\Model\Proveedor;
use FacturaScripts\Dinamic\Model\User;
use FacturaScripts\Dinamic\Model\AgenciaTransporte;
use FacturaScripts\Dinamic\Model\Agente;
use FacturaScripts\Dinamic\Model\Almacen;
use FacturaScripts\Dinamic\Model\Asiento;
use FacturaScripts\Dinamic\Model\Cliente;
use FacturaScripts\Dinamic\Model\Divisa;
use FacturaScripts\Dinamic\Model\Ejercicio;
use FacturaScripts\Dinamic\Model\Empresa;
use FacturaScripts\Dinamic\Model\EstadoDocumento;
use FacturaScripts\Dinamic\Model\FormaPago;
use FacturaScripts\Dinamic\Model\Serie;

/**
 * Description of Init
 *
 * @author Jose Antonio Cuello Principal <yopli2000@gmail.com>
 */
final class Init extends InitClass
{
    public function init(): void
    {
        PurchasesHeaderHTML::addMod(new Mod\PurchasesHeaderHTMLMod());
        SalesHeaderHTML::addMod(new Mod\SalesHeaderHTMLMod());
    }

    public function uninstall(): void
    {
    }

    public function update(): void
    {
        new User();
        new Agente();
        new Proveedor();
        new Almacen();
        new Cliente();
        new Divisa();
        new Ejercicio();
        new FormaPago();
        new Serie();
        new AgenciaTransporte();
        new Asiento();
        new Empresa();
        new EstadoDocumento();
        new FacturaCliente();
        new FacturaProveedor();
    }
}
