<?php

$timeline = [
    ["tahun" => "2025", "kegiatan" => "Masuk Kuliah"],
    ["tahun" => "2025", "kegiatan" => "Mulai belajar python"],
    ["tahun" => "2026", "kegiatan" => "Belajar HTML, JavaScript, PHP and SQL"],
];


function highlightTahun($tahun) {
    if ($tahun == "2024") {
        return "text-blue-600 font-bold"; 
    }
    return "";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Timeline Belajar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

<div class="max-w-xl mx-auto bg-white p-6 rounded shadow">

    <h2 class="text-2xl font-bold mb-6 text-center">
        Timeline Belajar Coding
    </h2>

    
    <div class="border-l-4 border-blue-500 pl-4 space-y-6">

       
        <?php foreach ($timeline as $data): ?>
            <div>
                <p class="<?= highlightTahun($data['tahun']) ?>">
                    <?= $data['tahun'] ?>
                </p>
                <p class="text-gray-700">
                    <?= $data['kegiatan'] ?>
                </p>
            </div>
        <?php endforeach; ?>

    </div>

    
    <div class="mt-6 flex gap-3">
        <a href="profil.php" class="bg-gray-500 text-white px-4 py-2 rounded">
            Kembali ke Profil
        </a>

        <a href="blog.php" class="bg-blue-500 text-white px-4 py-2 rounded">
            Menuju Blog Developer
        </a>
    </div>

</div>

</body>
</html>