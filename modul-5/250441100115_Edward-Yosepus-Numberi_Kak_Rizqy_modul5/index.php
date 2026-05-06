<?php
$pesan_error = "";
$show_result = false;

function tampilkanData($label, $data) {
    return "<tr><td class='font-semibold'>$label</td><td>: $data</td></tr>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['framework']) || empty($_POST['pengalaman'])) {
        $pesan_error = "Semua input wajib diisi!";
    } else {
        $show_result = true;
        $frameworks = explode(",", $_POST['framework']);
        $jumlah_fw = count($frameworks);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Profil</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

<div class="max-w-2xl mx-auto bg-white p-6 rounded-xl shadow">

    <h2 class="text-2xl font-bold mb-4">Profil Saya</h2>

    <img src="edward.jpeg" class="w-32 rounded mb-4">

    <table class="w-full border mb-6">
        <tr><td class="font-semibold">Nama</td><td>: Edward Numberi</td></tr>
        <tr><td class="font-semibold">ID</td><td>: 1311</td></tr>
        <tr><td class="font-semibold">TTL</td><td>: Kaimana, 13 Maret 2006</td></tr>
        <tr><td class="font-semibold">Email</td><td>: edwardnumberi56@gmail.com</td></tr>
    </table>

    <h3 class="font-bold mb-2">Form Skill</h3>
    

    <form method="post" class="space-y-3">
        <input type="text" name="framework" placeholder="Laravel, React, Tailwind"
            class="w-full border p-2 rounded" required>

        <textarea name="pengalaman" placeholder="Pengalaman..."
            class="w-full border p-2 rounded" required></textarea>

        <div>
            <label><input type="checkbox" name="tools[]" value="VS Code"> VS Code</label>
            <label class="ml-3"><input type="checkbox" name="tools[]" value="GitHub"> GitHub</label>
        </div>

        <div>
            <label><input type="radio" name="minat" value="Frontend" checked> Frontend</label>
            <label class="ml-3"><input type="radio" name="minat" value="Backend"> Backend</label>
        </div>

        <select name="level" class="border p-2 rounded w-full">
            <option>Dasar</option>
            <option>Cukup</option>
            <option>Profesional</option>
        </select>

        <button class="bg-blue-500 text-white px-4 py-2 rounded">Proses</button>
    </form>

    <?php if ($show_result): ?>
        <div class="mt-6">
            <h3 class="font-bold mb-2">Hasil</h3>

            <table class="w-full border mb-3">
                <?= tampilkanData("Bidang", $_POST['minat']) ?>
                <?= tampilkanData("Level", $_POST['level']) ?>
            </table>

            <ul class="list-disc ml-5">
                <?php foreach($frameworks as $fw) echo "<li>".trim($fw)."</li>"; ?>
            </ul>

            <p class="mt-2"><?= nl2br(htmlspecialchars($_POST['pengalaman'])) ?></p>

            <?php if ($jumlah_fw > 2): ?>
                <p class="text-green-600 font-semibold mt-2">Skill kamu cukup luas!</p>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <div class="mt-6">
    <a href="timeline.php"
       class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
       Timeline Belajar
    </a>
</div>

</div>

</body>
</html>