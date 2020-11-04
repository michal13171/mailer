<html>
<head>
    <title>Aktywacja konta</title>
</head>
<body>
<table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;">
    <tr>
        <th>
            <h1>Prosze kliknąć w link aby aktywować swoje konto!</h1>
        </th>
        <td>

                <a class="btn btn-primary" href="http://127.0.0.1:8000/activ/{{ $user->id }}">Aktywuj konto</a>

        </td>
    </tr>
</table>

Dziekuję<br>
{{ config('app.name') }}
</body>
</html>
