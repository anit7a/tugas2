<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learnify - Kuis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color: #57B4BA" class="text-start">
    <header class="px-4 d-flex flex-wrap py-3 mb-4 border-bottom align-items-center" style="background-color: #015551;">
        <img src="logo.png" width="100" />
        <pre class="fs-1 mx-2 fw-bold">Learnify<span class="fs-5">: Belajar Cerdas, Kuasai Dunia!</span></pre>
    </header>

    <main class="container rounded-4 mb-4 text-start" style="background-color:rgb(144, 201, 198); padding: 40px 50px;">
        <?php
        $soal = [
            ["Soal" => "Apa kepanjangan dari HTML?",
                "Pilihan" => ["a. Hyper Text Markup Language", "b. Hyperlinks and Text Markup Language", "c. Home Tool Markup Language", "d. Hyper Tool Multi Language"]],
            ["Soal" => "Bagaimana cara mengatur latar belakang halaman menjadi warna merah dalam CSS?",
                "Pilihan" => ["a. background: red;", "b. bgcolor: red;", "c. color-background: red;", "d. background-color: red;"]],
            ["Soal" => "Tag HTML apa yang digunakan untuk membuat baris baru?",
                "Pilihan" => ["a. newline", "b. hr", "c. line", "d. br"]],
            ["Soal" => "Apa fungsi utama dari PHP?",
                "Pilihan" => ["a. Mengatur tata letak halaman web", "b. Mengatur tampilan halaman web", "c. Memproses data di sisi server", "d. Menambahkan animasi ke halaman web"]],
            ["Soal" => "Bagaimana cara menampilkan gambar di HTML?",
                "Pilihan" => ["a. img src='gambar.jpg'", "b. image src='gambar.jpg'", "c. pic src='gambar.jpg'", "d. photo src='gambar.jpg'"]]
        ];
        ?>
        <h1 class="text-center">Kuis</h1>
        <form action="hasil.php" method="POST">
            <ol>
                <?php foreach ($soal as $index => $data) { ?>
                <li>
                    <?= $data['Soal'] ?><br>
                    <?php foreach ($data['Pilihan'] as $option) { ?>
                    <input type="radio" required name="q<?= $index ?>" value="<?= $option ?>"> <?= $option ?><br>
                    <?php } ?>
                    <br>
                </li>
                <?php } ?>
            </ol>
            <div class="text-end">
                <input type="submit" value="Kirim Jawaban" class="btn btn-info">
            </div>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>