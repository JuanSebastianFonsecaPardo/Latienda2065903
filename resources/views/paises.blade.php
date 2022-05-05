<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paises</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <h1>Paises de la región</h1>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Capital</th>
                <th>Moneda</th>
                <th>Poblacíon</th>
                <th rowspan="3">Cuidades</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Paises as $pais => $infopais)
                <tr>
                    <td class="text-warning" rowspan=' {{ count($infopais["Ciudades"]) }} '>
                        {{ $pais }}
                    </td>
                    <td class="text-primary" rowspan=' {{ count($infopais["Ciudades"]) }} '>
                        {{ $infopais["Capital"] }}
                    </td>
                    <td class="text-danger" rowspan=' {{ count($infopais["Ciudades"]) }} '>
                        {{ $infopais["Moneda"] }}
                    </td>
                    <td class="text-success" rowspan=' {{ count($infopais["Ciudades"]) }} '>
                        {{ $infopais["Poblacíon"] }} millones de habitantes.
                    </td>
                    @foreach( $infopais["Ciudades"] as $ciudad)
                        <th  class="bg-secondary">
                            {{ $ciudad }}
                        </th>
                    </tr>
                    @endforeach
            @endforeach
        </tbody>
        <tfoot></tfoot>
    </table>
</body>
</html>