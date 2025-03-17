<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 
</head>

<body style="background-color: #57B4BA" class="text-center">
<header class="px-4 d-flex flex-wrap py-3 mb-4 border-bottom align-items-center"
        style="background-color: #015551;">
        <img src="logo.png" width="80" />
        <pre class="fs-1 mx-2 fw-bold">Learnify<span class="fs-5">: Belajar Cerdas, Kuasai Dunia!</span></pre>
    </header>

    <main class="container rounded-4 mb-4" style="background-color: rgb(144, 201, 198); padding: 40px 50px;">
        <?php
        $skor = 0;
        $kunci = [
                    "a. Hyper Text Markup Language", 
                    "d. background-color: red;", 
                    "d. br", 
                    "c. Memproses data di sisi server", 
                    "a. img src='gambar.jpg'"
                ];
        for ($i = 0; $i < 5; $i++){
            $a[]= $_POST['q'.$i];
        }
        ?>
        <h1 class="text-center">
            Hasil Kuis
        </h1>
        <br>
        <?php for ($i = 0; $i < 5; $i++){?>
        Pertanyaan <?=$i+1?>:
        <?php
                if($a[$i] == $kunci[$i]){
                echo "<span style='color: green;'>Jawaban Anda benar!</span><br>";
                $skor += 1;
                } else {
                echo "<span style='color: red;'>Jawaban Anda salah. Jawaban yang benar: " . $kunci[$i]."</span><br>";
                }
            ?>
        <br>
        <?php } ?>
        <br>
        <h3>Skor Pengguna : <?=$skor?> / 5</h3>
        <h3>Presentase Nilai: <?=$skor*20?>%</h3>
        <div class="text-end">
            <a href="tugas2.php" class="btn btn-info">Kembali ke Halaman Utama</a>
        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>