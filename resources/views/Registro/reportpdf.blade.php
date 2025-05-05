<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Informe de Participante</title>
    <style>
        /* --------- Estilo general --------- */
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
            margin: 20px;
            margin-top: -20px;
            position: relative;
            padding-bottom: 50px; /* Espacio para el pie de página */
        }

        .section-title {
            font-weight: bold;
            margin-top: 20px;
            text-transform: uppercase;
            border-bottom: 1px solid #333;
        }

        /* --------- Cabecera con logos --------- */
        .watermark {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(-30deg);
            opacity: 0.3; /* Ajusta la transparencia */
            z-index: -1; /* Para que esté detrás de todo */
            width: 60%; /* Tamaño relativo al ancho del documento */
            pointer-events: none; /* Para que no interfiera con el contenido */
        }

        /* --------- Pie de página --------- */
        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            height: 30px;
            text-align: center;
            border-top: 1px solid #333;
            padding-top: 5px;
            margin-left: 20px;
            margin-right: 20px;
        }

        .page-number:after {
            content: counter(page);
        }

        /* --------- Tabla --------- */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th {
            background-color: #343a40;
            color: white;
            padding: 6px;
            font-weight: bold;
            border: 1px solid #ccc;
        }

        td {
            padding: 6px;
            border: 1px solid #ccc;
        }

        .info-table {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <!-- Pie de página -->
    <div class="footer">
        Página <span class="page-number"></span>
    </div>

    <div>
        <div class="watermark">
            <img src="{{ public_path('img/colocareste.jpg') }}" style="width: 100%; height: auto;">
        </div>
    </div>

    <!-- Resto de tu contenido HTML... -->
    <div class="container-header">
        <table style="width: 100%; border-collapse: collapse; border: none;">
            <tr>
                <td width="100" style="text-align: left; vertical-align: middle; border: none;">
                    <img src="{{ public_path('img/espuno.jpg') }}"
                        style="width: 110px; height: 120px; margin-left: -20px;">
                </td>
                <td style="text-align: center; vertical-align: middle; border: none;">
                    <div style="font-weight: bold; font-size: 16pt; text-transform: uppercase; text-decoration: underline;" class="titulo">
                        MUNICIPALIDAD PROVINCIAL DE PUNO</div><br>
                    <div style="font-size: 15px text-transform: uppercase font-weight: bold text-decoration: underline;">Sub Gerencia De Promoción, Educación, Cultura Y Deporte</div> <br>
                    <div style="font-size: 14px text-transform: uppercase font-weight: bold text-decoration: underline;">Consejo Provincial de Cultura</div>
                </td>
                <td width="100" style="text-align: right; vertical-align: middle; border: none;">
                    <img src="{{ public_path('img/logomuseo2.jpg') }}"
                        style="width: 100px; height: 100px; border-radius: 100%;">
                </td>
            </tr>
        </table>
        <br>
    </div>
    <div style="font-size: 14px; text-align: center; font-weight: bold; text-decoration: underline;">
        Ficha Personal
    </div>
    <div class="section-title">Datos Personales</div>
    <table style="width: 100%; border-collapse: collapse; border: none;">
        <tr>
            <td style="width: 30%; font-weight: bold; vertical-align: top; padding: 2px; border: none;">Código</td>
            <td style="width: 70%; padding: 2px; border: none;">{{ $participante->dni }}</td>
        </tr>
        <tr>
            <td style="border: none; font-weight: bold; vertical-align: top; padding: 2px;">Nombres y Apellidos</td>
            <td style="border: none; padding: 2px;">{{ $participante->nombres }} {{ $participante->apellido_paterno }}
                {{ $participante->apellido_materno }}</td>
        </tr>
        <tr>
            <td style="border: none; font-weight: bold; vertical-align: top; padding: 2px;">Comisión</td>
            <td style="padding: 2px; border: none;">{{ $participante->comision->nombrecomision }}</td>
        </tr>
        <tr>
            <td style="border: none; font-weight: bold; vertical-align: top; padding: 2px;">Tipo Comisión</td>
            <td style="border: none; padding: 2px;">
                {{ $participante->comision->tipocomision->nom_tipcomision ?? 'No asignado' }}</td>
        </tr>
        <tr>
            <td style="border: none; font-weight: bold; vertical-align: top; padding: 2px;">Organización</td>
            <td style="border: none; padding: 2px;">{{ $participante->organizacion }}</td>
        </tr>
        <tr>
            <td style="border: none; font-weight: bold; vertical-align: top; padding: 2px;">Fecha nacimiento</td>
            <td style="border: none; padding: 2px;">{{ date('d-m-Y', strtotime($participante->f_nacimiento)) }}</td>
        </tr>
        <tr>
            <td style="border: none; font-weight: bold; vertical-align: top; padding: 2px;">Lugar de nacimiento</td>
            <td style="border: none; padding: 2px;"><p style="margin: 0; vertical-align: inherit;">
                {{ $participante->departamento }} / {{ $participante->provincia }} / {{ $participante->distrito }}
            </p> </td>
        </tr>
        <tr>
            <td style="border: none; font-weight: bold; vertical-align: top; padding: 2px;">Teléfono</td>
            <td style="border: none; padding: 2px;">{{ $participante->celular }}</td>
        </tr>
        <tr>
            <td style="border: none; font-weight: bold; vertical-align: top; padding: 2px;">Correo Electrónico</td>
            <td style="border: none; padding: 2px;">{{ $participante->email }}</td>
        </tr>
        <tr>
            <td style="border: none; font-weight: bold; vertical-align: top; padding: 2px;">Profesión</td>
            <td style="border: none; padding: 2px;">{{ $participante->profesion }}</td>
        </tr>
        <tr>
            <td style="border: none; font-weight: bold; vertical-align: top; padding: 2px;">Residencia</td>
            <td style="border: none; padding: 2px;">{{ $participante->l_residencia }}</td>
        </tr>

    </table>

    <div class="section-title">Reconocimientos en su trayectoria</div>

    <table class="info-table">
        <thead>
            <tr>
                <th style="width: 30px;">N°</th>
                <th>Institución</th>
                <th>Reconocimiento</th>
                <th>Evento</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($registro as $i => $reg)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $reg->institucion }}</td>
                    <td>{{ $reg->nom_reconocimiento }}</td>
                    <td>{{ $reg->evento->nom_evento ?? '-' }}</td>
                    <td>{{ date('d-m-Y', strtotime($reg->evento->fech_aperturra ?? '-')) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
