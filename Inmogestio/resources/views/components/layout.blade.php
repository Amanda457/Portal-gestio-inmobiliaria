<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ $title ?? 'Example Website' }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
  <script type="text/javascript" charset="utf-8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" charset="utf-8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
  <style>
    /* Personalización de las filas */
table.dataTable tbody tr {
    background-color: white; /* Fondo blanco para todas las filas */
    border-bottom: 1px solid #ddd; /* Borde inferior entre filas */
}

/* Personalizar la cabecera */
table.dataTable thead th {
    background-color: green-100; /* Fondo verde */
    color: black;              /* Texto blanco */
    text-align: center;        /* Alinear texto al centro */
}

/* Personalizar el pie de página */
table.dataTable tfoot th {
    background-color: #4CAF50; /* Fondo verde */
    color: white;              /* Texto blanco */
    padding: 10px;             /* Espaciado en el pie */
    text-align: center;        /* Alinear texto al centro */
}

/* Estilo general de la tabla */
table.dataTable {
    border-collapse: collapse; /* Asegurarse de que los bordes no se dupliquen */
    width: 100%;               /* Ocupa todo el ancho disponible */
}

/* Personalizar las celdas */
table.dataTable td, table.dataTable th {
    padding: 8px;              /* Espaciado adecuado para las celdas */
    text-align: center;        /* Alinear texto al centro */
    font-size: 0.875rem;       /* Tamaño de fuente pequeño */
}

/* Fila activa o seleccionada */
table.dataTable tbody tr.selected {
    background-color: #e0f7fa; /* Fondo suave para fila seleccionada */
}

/* Botones de acción */
table.dataTable tbody td a {
    text-decoration: none;     /* Eliminar subrayado en enlaces */
    color: #007bff;            /* Color de texto azul */
    font-weight: bold;         /* Hacer los enlaces en negrita */
}

table.dataTable tbody td a:hover {
    text-decoration: underline; /* Subrayado en hover */
    color: #0056b3;             /* Color azul más oscuro en hover */
}

/* Personalización del borde inferior de las celdas */
table.dataTable td {
    border-bottom: 1px solid #ddd; /* Borde inferior gris claro */
}
  </style>
</head>

<body class=" font-sans antialiased bg-purple-50">
  <nav>


  </nav>
  {{ $slot }}

</body>

</html>