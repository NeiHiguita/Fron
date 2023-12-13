<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Fugaz_Retro/css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <title>Dashboard - FUGAZ-RETRO</title>

</head>

<body>
<div class="sidebar">
        <div class="search-bar">
        <div class="logo">
                <h2>FUGAZ RETRO</h2>
            </div>
            <div class="search">
    <input type="text" placeholder="Buscar..." id="searchInput">
    <span class="search-icon"><i class="bi bi-search"></i></span>
</div>
        </div>
        <ul class="menu">
            <li>
                <a href="/Fugaz_Retro/php/dashboard.php">
                <i class="bi bi-gear"></i>Configuración</a>
                <ul class="submenu">
                    <li><a href="/Fugaz_Retro/php/roles.php">Roles</a></li>
                </ul>
            </li>
            <li><a href="/Fugaz_Retro/php/usuario.php">
            <i class="bi bi-people"></i> Usuarios</a></li>
            <li>
                <a href="#">
                <i class="bi bi-cart4"></i>Compras</a>
                <ul class="submenu">
                    <li><a href="categoria.php">Categoría insumo</a></li>
                    <li><a href="insumo.php">Insumo</a></li>
                    <li><a href="proveedor.php">Proveedores</a></li>
                    <li><a href="compras.php">Compras</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                <i class="bi bi-cash-coin"></i>Ventas</a>
                <ul class="submenu">
                    <li><a href="clientes.php">Clientes</a></li>
                    <li><a href="pedido.php">Pedido</a></li>
                    <li><a href="producto.php">Producto</a></li>
                    <li><a href="perdida_insumo.php">Perdida insumo</a></li>
                    <li><a href="venta.php">Ventas</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="topbar">
        <div class="navigation">
        <a href="dashboard.php" class="dashboard-link">
            <h2>Dashboard</h2>
        </div>
        <div class="profile">
    <!-- Utilizando Bootstrap para un círculo -->
    <div class="dropdown">
        <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;" id="dropdownMenuButton" onclick="toggleDropdown()" aria-haspopup="true" aria-expanded="false">
            <i class="bi bi-person-fill text-white"></i>
        </div>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="profileDropdown" style="display: none;">
            <a class="dropdown-item" href="#">Carolina Mazo</a>
            <a class="dropdown-item" href="index.php">Cerrar sesión</a>
        </div>
    </div>
</div>
</div>
<div class="content1">
        <!-- Contenido principal del dashboard -->
        <div class="search-box">
        <h1>Pedido</h1>
        <div class="search">
            <input type="text" id="search_Input" placeholder="Buscar...">
            <span class="search-icon"><i class="bi bi-search"></i></span>
        </div>
    </div>
    <!--style>
       

        .modal {
            display: none;
            position: fixed;
            margin-top: 60px;
            margin-left: 400px;
            width: 50%;
            height: 85%;
            background-color: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
        }
    </style>
    <div class="tab">
        <div id="modal" class="modal">
            <div class="modal-content">
                <button class="close btn btn-secondary" onclick="closeModal()">cerrar</button>
                <h5>Agregar pedido</h5>
    
                <div class="mb-3">
                    <label for="Estado">Estado:</label>
            <select id="Estado" name="Estado" required>
                <option value="pendiente">pendiente</option>
                <option value="en proceso">En proceso</option>
                <option value="entregado">Entregado</option>
    </select>
    </div>

    <div class="mb-3">
                    <label for="metodo_pago">Metodo de pago:</label>
            <select id="metodo_pago" name="metodo_pago" required>
                <option value="nequi">Nequi</option>
                <option value="bancolombia">Bancolombia</option>
                <option value="daviplata">Daviplata</option>
    </select>
    </div>


                    <div class="mb-3">
                        <label for="Teléfono" class="form-label">Teléfono:</label>
                        <input type="text" class="form-control" id="Teléfono" name="Teléfono" required>
                    </div>

                    <div class="mb-3">
                        <label for="Fecha_pedido" class="form-label">Fecha del pedido:</label>
                        <input type="date" class="form-control" id="Fecha_pedido" name="Fecha_pedido" required>
                    </div>

                    <div class="mb-3">
                        <label for="Fecha_entrega" class="form-label">Fecha de entrega:</label>
                        <input type="date" class="form-control" id="Fecha_entrega" name="Fecha_entrega" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="costo_envio" class="form-label">Costo envio:</label>
                        <input type="text" class="form-control" id="costo_envio" name="costo_envio" required>
                    </div>

                    <div class="mb-3">
                        <label for="Subtotal" class="form-label">Subtotal:</label>
                        <input type="Number" class="form-control" id="Subtotal" name="Subtotal" required>
                    </div>

                    <div class="mb-3">
                        <label for="Iva" class="form-label">Iva:</label>
                        <input type="Number" class="form-control" id="Iva" name="Iva" required>
                    </div>

                    <div class="mb-3">
                        <label for="Descuento" class="form-label">Descuento:</label>
                        <input type="text" class="form-control" id="Descuento" name="Descuento" required>
                    </div>

                    <div class="mb-3">
            <label for="comprobante_pago" class="form-label">Comprobante de pago</label>
            <input type="file" class="form-control" id="comprobante_pago" name="comprobante_pago" accept="image/*" capture="camera" required>
        </div>
                    


        <div class="mb-3">
                        <label for="total_pedido" class="form-label">Total del pedido:</label>
                        <input type="text" class="form-control" id="total_pedido" name="total_pedido" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Agregar pedido</button>
                </form>
            </div>
        </div-->

        <button class="btn btn-primary agregar" onclick="openModal()">Agregar pedido</button>

        <!-- Tabla para mostrar las categorías -->
        <table id="Table">
            <thead>
                <tr>
                    <th>Estado</th>
                    <th>Metodo de pago</th>
                    <th>Fecha pedido</th>
                    <th>Fecha entrega</th>
                    <th>Costo pedido</th>
                    <th>Coato envio</th>
                    <th>Subtotal</th>
                    <th>Iva</th>
                    <th>Descuento</th>
                    <th>Comprobante de pago</th>
                    <th>Toatal pedido</th>
                    <th></th>
                   
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Enviado</td>
                    <td>Nequi</td>
                    <td>10/12/2023</td>
                    <td>14/12/2023</td>
                    <th>10.000</th>
                    <th>12.000</th>
                    <th>22.000</th>
                    <th>19%</th>
                    <th>DNinguno</th>
                    <th>Comprobante de pago</th>
                    <th>22.000</th>
                    <td>
                        <button class="editar" onclick="openModal()">Editar</button>
                    </td>
                </tr>
                <tr>
                 <td>Pendiente</td>
                    <td>Bancolombia</td>
                    <td>01/12/2023</td>
                    <td>05/12/2023</td>
                    <th>20.000</th>
                    <th>12.000</th>
                    <th>32.000</th>
                    <th>19%</th>
                    <th>Ninguno</th>
                    <th>Comprobante de pago</th>
                    <th>32.000</th>
                    <td>
                        <button class="editar" onclick="openModal()">Editar</button>
                    </td>
                </tr>
             
            </tbody>
        </table>
    </div>
  
    </div>

    <!--script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            closeModal();

            const form = document.getElementById('clienteForm');
            form.addEventListener('submit', function (event) {
                event.preventDefault();
                showAlert('Pedido agregado con éxito!');
                closeModal();
            });
        });

        function openModal() {
            document.getElementById('modal').style.display = 'flex';
        }

        function closeModal() {
            document.getElementById('modal').style.display = 'none';
        }

        function showAlert(message) {
            alert(message);
            // Puedes personalizar el tipo de alerta (puede ser una alerta de Bootstrap, SweetAlert, etc.)
        }

    </script-->
          <!-- Modal para agregar pedidos -->
          <div id="addClientModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeAddModal()">&times;</span>
        <h2>Registrar Cliente</h2>
        <form id="addClientForm">
            <label for="clientDocument">Documento:</label>
            <input type="text" id="clientDocument" name="clientDocument" required><br><br>
            <label for="clientAddress">Dirección:</label>
            <input type="text" id="clientAddress" name="clientAddress" required><br><br>
            <label for="clientPhone">Teléfono:</label>
            <input type="text" id="clientPhone" name="clientPhone" required><br><br>
            <label for="clientCity">Ciudad:</label>
            <input type="text" id="clientCity" name="clientCity" required><br><br>
            <button type="button" onclick="submitClient()">Guardar</button>
        </form>
    </div>
</div>


        <script src="/Fugaz_Retro/js/dashboard.js"></script>

</body>

</html>