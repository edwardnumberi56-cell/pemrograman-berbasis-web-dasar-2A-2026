<?php

$artikel = [
    "html" => [
        "judul" => "Belajar HTML Pertama Kali",
        "tanggal" => "2023-09-10",
        "isi" => "Pertama kali belajar HTML terasa membingungkan, tapi menyenangkan saat berhasil membuat halaman sederhana.",
        "gambar" => "img/html.jpg",
        "link" => "https://www.w3schools.com/html/"
    ],
    "error" => [
        "judul" => "Error Pertama",
        "tanggal" => "2023-10-05",
        "isi" => "Mengalami error pertama membuat saya sadar pentingnya membaca pesan error dan tidak panik.",
        "gambar" => "img/error.jpg",
        "link" => "https://stackoverflow.com/"
    ],
    "php" => [
        "judul" => "Mulai Belajar PHP",
        "tanggal" => "2024-02-12",
        "isi" => "PHP membuka pemahaman baru tentang backend dan bagaimana data diproses di server.",
        "gambar" => "img/php.jpg",
        "link" => "https://www.php.net/"
    ]
];


$key = $_GET['artikel'] ?? null;


$quotes = [
    "Coding itu latihan, bukan bakat.",
    "Error adalah guru terbaik.",
    "Jangan menyerah saat bug muncul.",
    "Belajar sedikit setiap hari lebih baik."
];
$quote_acak = $quotes[array_rand($quotes)];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Blog Developer</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

<div class="max-w-3xl mx-auto bg-white p-6 rounded shadow">

    <h2 class="text-2xl font-bold mb-4">Blog Reflektif Developer</h2>

    
    <ul class="list-disc ml-5 mb-6">
        <?php foreach ($artikel as $k => $a): ?>
            <li>
                <a href="?artikel=<?= $k ?>" class="text-blue-500 hover:underline">
                    <?= $a['judul'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

   
    <?php if ($key && isset($artikel[$key])): 
        $a = $artikel[$key];
    ?>
        <div class="mb-6">
            <h3 class="text-xl font-bold"><?= $a['judul'] ?></h3>
            <p class="text-sm text-gray-500 mb-2"><?= $a['tanggal'] ?></p>

            <img src="<?= $a['gambar'] ?>" class="w-full rounded mb-3">

            <p class="mb-3"><?= $a['isi'] ?></p>

            <a href="<?= $a['link'] ?>" target="_blank"
                class="text-blue-600 underline">
                Baca Referensi
            </a>
        </div>
    <?php endif; ?>

    
    <div class="bg-gray-200 p-3 rounded mb-4 italic">
        "<?= $quote_acak ?>"
    </div>

    
    <div class="flex gap-3">
        <a href="timeline.php" class="bg-gray-500 text-white px-4 py-2 rounded">
            Kembali ke Timeline
        </a>

        <a href="profil.php" class="bg-blue-500 text-white px-4 py-2 rounded">
            Ke Profil
        </a>
    </div>

</div>

</body>
</html>