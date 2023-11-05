<?php

$data = array(
    array(
        'Foto' => "<img src = '3.png' width = '190' height = '150'>",
        'Nama perusahaan' => 'Apple Inc',
        'tahun berdiri' => '1976',
        'asal negara' => 'Amerika Serikat',
        'pendiri' => ' Steve Jobs, Steve Wozniak, dan Ronald Wayne'
    ),
    array(
        'Foto' => "<img src = '4.png' width = '190' height = '150'>",
        'Nama perusahaan' => 'Microsoft Corporation',
        'tahun berdiri' => '1975',
        'asal negara' => ' Amerika',
        'pendiri' => 'Bill Gates dan Paul Allen'
    ),
    array(
        'Foto' =>  "<img src = '5.png' width = '190' height = '150'>",
        'Nama perusahaan' => 'Amazon.com, Inc',
        'tahun berdiri' => '1994',
        'asal negara' => 'Amerika',
        'pendiri' => 'Jeff Bezos '
    ),
    array(
        'Foto' =>  "<img src = '6.png' width = '190' height = '150'>",
        'Nama perusahaan' => 'Samsung Electronics',
        'tahun berdiri' => '1938',
        'asal negara' => 'Korea Selatan',
        'pendiri' => 'Lee Byung-chul'
    ),
    array(
        'Foto' => "<img src = '2.png' width = '190' height = '150'>",
        'Nama perusahaan' => 'Intel Corporation',
        'tahun berdiri' => '1968',
        'asal negara' => 'Amerika Serikat',
        'pendiri' => ' Robert Noyce dan Gordon Moore'
    ),
    array(
        'Foto' =>  "<img src = '1.png' width = '190' height = '150'>",
        'Nama perusahaan' => 'Sony Corporation',
        'tahun berdiri' => '1946',
        'asal negara' => 'Jepang ',
        'pendiri' => 'Masaru Ibuka dan Akio Morita'
    ),
    array(
        'Foto' =>  "<img src = '7.png' width = '190' height = '150'>",
        'Nama perusahaan' => 'Oracle Corporation',
        'tahun berdiri' => '1977 ',
        'asal negara' => 'Amerika Serikat',
        'pendiri' => ' Larry Ellison, Bob Miner, dan Ed Oates'
    ),
    array(
        'Foto' => "<img src = '8.png' width = '190' height = '150'>",
        'Nama perusahaan' => 'Facebook, Inc',
        'tahun berdiri' => ' 2004 ',
        'asal negara' => 'Amerika Serikat ',
        'pendiri' => 'Mark Zuckerberg, Andrew McCollum, Eduardo Saverin, Chris Hughes, dan Dustin Moskovitz'
    ),
    array(
        'Foto' =>  "<img src = '9.png' width = '190' height = '150'>",
        'Nama perusahaan' => 'Adobe Inc',
        'tahun berdiri' => '1982',
        'asal negara' => 'Amerika Serikat.',
        'pendiri' => 'John Warnock dan Charles Geschke'
    ),
    array(
        'Foto' =>  "<img src = '10.png' width = '190' height = '150'>",
        'Nama perusahaan' => 'Tesla, Inc',
        'tahun berdiri' => '1982',
        'asal negara' => 'Amerika Serikat.',
        'pendiri' => 'Martin Eberhard dan Marc Tarpenning'
    )
    // Tambahkan data lain jika diperlukan
);

// Cetak tabel HTML
echo '<table border="1">
        <tr>
            <th>Foto</th>
            <th>Nama perusahaan</th>
            <th>tahun berdiri</th>
            <th>asal negara</th>
            <th>pendiri</th>
        </tr>';

        foreach ($data as $entry) {
            echo '<tr>';
            echo '<td>' . $entry['Foto']  . '</td>';
            echo '<td>' . $entry['Nama perusahaan'] . '</td>';
            echo '<td>' . trim($entry['tahun berdiri']) . '</td>'; // Membersihkan spasi
            echo '<td>' . trim($entry['asal negara']) . '</td>'; // Membersihkan spasi
            echo '<td>' . $entry['pendiri'] . '</td>';
            echo '</tr>';
        }
        
        echo '</table>';
        
        ?>