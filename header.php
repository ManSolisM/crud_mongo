<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/bootstrap5/bootstrap.min.css">
    <link rel="stylesheet" href="./public/fontawesome-free-6.1.1-web/css/all.css">
    <title>Sistema de Gestión de Mascotas</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding-bottom: 40px;
        }

        /* Header principal */
        .main-header {
            background: linear-gradient(135deg, #4169E1 0%, #6a5acd 100%);
            box-shadow: 0 4px 20px rgba(0,0,0,0.2);
            padding: 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            animation: slideDown 0.5s ease-out;
        }

        @keyframes slideDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .navbar-custom {
            padding: 15px 0;
        }

        .brand-section {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo-icon {
            background: rgba(255,255,255,0.2);
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: #fff;
            transition: all 0.3s ease;
        }

        .logo-icon:hover {
            transform: rotate(360deg) scale(1.1);
            background: rgba(255,255,255,0.3);
        }

        .brand-text h1 {
            color: #fff;
            font-size: 24px;
            font-weight: 700;
            margin: 0;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }

        .brand-text p {
            color: rgba(255,255,255,0.9);
            font-size: 13px;
            margin: 0;
            font-weight: 500;
        }

        /* Contenedor principal */
        .content-wrapper {
            animation: fadeIn 0.6s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .container {
            max-width: 1100px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            border: none;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.25);
        }

        .card-body {
            padding: 30px;
        }

        /* Encabezados */
        h2 {
            color: #4169E1;
            margin-bottom: 25px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 28px;
        }

        h2 i {
            color: #FFB347;
        }

        /* Botones */
        .btn {
            border-radius: 10px;
            font-weight: 600;
            padding: 12px 24px;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 0.5px;
        }

        .btn i {
            margin-right: 8px;
        }

        .btn-outline-info {
            background: transparent;
            color: #4169E1;
            border: 2px solid #4169E1;
        }

        .btn-outline-info:hover {
            background: #4169E1;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(65, 105, 225, 0.3);
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .btn-warning {
            background: linear-gradient(135deg, #FFB347 0%, #ff9f00 100%);
            color: #fff;
        }

        .btn-warning:hover {
            background: linear-gradient(135deg, #ff9f00 0%, #FFB347 100%);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 179, 71, 0.4);
        }

        .btn-danger {
            background: linear-gradient(135deg, #FF6B6B 0%, #ff3b3b 100%);
            color: #fff;
        }

        .btn-danger:hover {
            background: linear-gradient(135deg, #ff3b3b 0%, #FF6B6B 100%);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 107, 107, 0.4);
        }

        /* Formularios */
        label {
            display: block;
            margin-top: 20px;
            margin-bottom: 8px;
            font-weight: 600;
            color: #555;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 15px;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
            border-color: #4169E1;
            outline: none;
            background: #fff;
            box-shadow: 0 0 0 4px rgba(65, 105, 225, 0.1);
        }

        /* Tabla */
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0;
        }

        .table thead {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .table thead th {
            padding: 16px 12px;
            text-align: left;
            color: #fff;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 13px;
            letter-spacing: 0.5px;
            border: none;
        }

        .table tbody td {
            padding: 14px 12px;
            border-bottom: 1px solid #f0f0f0;
            color: #555;
            vertical-align: middle;
        }

        .table tbody tr {
            transition: all 0.2s ease;
        }

        .table tbody tr:hover {
            background: #f8f9ff;
            transform: scale(1.01);
        }

        .table tbody tr:last-child td {
            border-bottom: none;
        }

        .table .text-center {
            text-align: center;
        }

        .table form {
            display: inline;
        }

        .table .btn {
            padding: 8px 16px;
            font-size: 13px;
        }

        /* Alertas */
        .alert {
            border-radius: 12px;
            padding: 18px 20px;
            font-weight: 500;
            border: none;
            margin: 20px 0;
            animation: slideIn 0.4s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .alert-danger {
            background: linear-gradient(135deg, #ffdddd 0%, #ffe6e6 100%);
            border-left: 4px solid #ff6b6b;
            color: #b30000;
        }

        .alert p {
            margin: 8px 0;
        }

        /* Fondo especial para eliminar */
        .fondoDelete {
            background: linear-gradient(135deg, #ffe6e6 0%, #fff0f0 100%) !important;
            border: 3px solid #ff6b6b !important;
        }

        /* Divisor */
        hr {
            border: none;
            height: 2px;
            background: linear-gradient(to right, transparent, #e0e0e0, transparent);
            margin: 25px 0;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .brand-text h1 {
                font-size: 18px;
            }

            .brand-text p {
                font-size: 11px;
            }

            .logo-icon {
                width: 40px;
                height: 40px;
                font-size: 20px;
            }

            h2 {
                font-size: 22px;
            }

            .btn {
                width: 100%;
                margin-bottom: 10px;
            }

            .table {
                font-size: 13px;
            }

            .table thead th,
            .table tbody td {
                padding: 10px 8px;
            }

            .card-body {
                padding: 20px;
            }
        }

        @media (max-width: 576px) {
            .container {
                padding: 0 15px;
            }

            .table-responsive {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table {
                min-width: 600px;
            }
        }

        /* Animación de carga */
        .loading-spinner {
            display: none;
            text-align: center;
            padding: 20px;
        }

        .spinner-border {
            width: 3rem;
            height: 3rem;
            border: 4px solid #f3f3f3;
            border-top: 4px solid #4169E1;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <header class="main-header">
        <nav class="navbar-custom">
            <div class="container">
                <div class="brand-section">
                    <div class="logo-icon">
                        <i class="fa-solid fa-paw"></i>
                    </div>
                    <div class="brand-text">
                        <h1>VetSystem</h1>
                        <p>Sistema de Gestión de Mascotas</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="content-wrapper">