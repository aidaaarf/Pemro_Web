<?php
function tampilkanHaloDunia(){
    echo "Halo dunia! <br>";
    tampilkanHaloDunia();
}
// tampilkanHaloDunia();

for ($i=1; $i <= 25; $i++) { 
  echo "Perulangan ke-{$i} <br>";
}
echo "<hr>";
function tampilanAgka (int $jumlah, int $indeks = 1) {
    echo "Perulangan ke-{$indeks} <br>";
    if ($indeks < $jumlah) {
        tampilanAgka($jumlah, $indeks + 1);
    }
}
tampilanAgka(20);

// menu bertingkat
$menu = [
    [
        "nama" => "Bercanda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ],
];
echo "<hr>";
function tampilanMenuBertingkat (array $menu){
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li>{$item['nama']}";
        if (isset($item['subMenu']) && is_array($item['subMenu'])) {
            tampilanMenuBertingkat($item['subMenu']);
        }
        echo "</li>";
    }
    echo "</ul>";
}
tampilanMenuBertingkat($menu);
?>