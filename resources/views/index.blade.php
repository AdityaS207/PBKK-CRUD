<table border="1">\
    <tr>
        <th>
            NRP
        </th>
        <th>
            Nama
        </th>
        <th>
            Alamat
        </th>
    </tr>
    <tr>
        @foreach ($mhs as $item)
        <td>
            {{ $item->nrp }}
        </td>
        <td>
            {{ $item->nama }}
        </td>
        <td>
            {{ $item->alamat }}
        </td>
        @endforeach
    </tr>
</table>