<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kemaskini Pengesahan Indeks Kesamaan Tesis</title>
    
</head>
<body>
<div class="container my-5">
    <h4 class="text-center mb-4">Kemaskini Pengesahan Indeks Kesamaan Tesis</h4>

    <form method="POST" action="<?= base_url('pengesahanIndeks/save_peng_indeks') ?>">

        <!-- Student Details -->
        <div class="mb-3">
            <label for="name" class="form-label">Nama:</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Alamat Emel Pelajar:</label>
            <input type="email" name="email" class="form-control" id="email" required>
        </div>

        <div class="mb-3">
            <label for="matric" class="form-label">No Matrik:</label>
            <input type="text" name="matric" class="form-control" id="matric" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Program:</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="program" id="sarjana" value="sarjana" required>
                <label class="form-check-label" for="sarjana">Sarjana</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="program" id="phd" value="phd" required>
                <label class="form-check-label" for="phd">Doktor Falsafah</label>
            </div>
        </div>

        <div class="mb-3">
            <label for="semester" class="form-label">Semester:</label>
            <input type="text" name="semester" class="form-control" id="semester" required>
        </div>

        <!-- Document Type -->
        <div class="mb-3">
            <label class="form-label">Dokumen yang ingin disahkan:</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="document_type[]" id="disertasi" value="disertasi">
                <label class="form-check-label" for="disertasi">Disertasi</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="document_type[]" id="viva" value="viva">
                <label class="form-check-label" for="viva">Tesis untuk viva</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="document_type[]" id="pengijazahan" value="pengijazahan">
                <label class="form-check-label" for="pengijazahan">Tesis yang telah dibetulkan untuk Pengijazahan</label>
            </div>
        </div>

        <!-- Supervisor Details -->
        <div class="mb-3">
            <label for="supervisor" class="form-label">Nama Penyelia Utama:</label>
            <input type="text" name="sv_name" class="form-control" id="supervisor" required>
        </div>

        <div class="mb-3">
            <label for="sv_email" class="form-label">Emel Penyelia Utama:</label>
            <input type="email" name="sv_email" class="form-control" id="sv_email" required>
        </div>

        <!-- Thesis Title -->
        <div class="mb-3">
            <label for="thesis_name" class="form-label">Tajuk Dokumen:</label>
            <input type="text" name="thesis_name" class="form-control" id="thesis_name" required>
        </div>

        <!-- Buttons -->
        <div class="d-flex justify-content-between">
            <a href="/myprojek/manage/pengesahanIndeks/confirm_peng_indeks" class="btn btn-success">Simpan</a>
        </div>
    </form>

    <!-- Footer -->
    <footer class="mt-4 text-center">
        <p class="text-muted">All rights reserved by Universiti Malaysia Terengganu.</p>
    </footer>
</div>
</body>
</html>
