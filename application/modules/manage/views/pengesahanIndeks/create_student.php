<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengesahan Indeks Kesamaan Tesis</title>
    
</head>
<body>
<div class="container my-5">
    <h4 class="text-center mb-4">Pengesahan Indeks Kesamaan Tesis</h4>

    <form method="POST" action="<?= base_url('PengesahanIndeks/save_new_student') ?>">

        <!-- Student & Thesis Info Display -->
        <div class="mb-3">
            <p><strong>Nama:</strong> <?= $student->T01_STUDENT_NAME ?></p>
            <p><strong>Alamat Emel Pelajar:</strong> <?= $student->T01_STUDENT_EMAIL ?></p>
            <p><strong>No Matrik:</strong> <?= $student->T01_STUDENT_MATRICNUM ?></p>
            <p><strong>Program:</strong> <?= $student->T01_PROGRAMME ?></p>
            <p><strong>Semester:</strong> <?= $student->T01_SEMESTER ?></p>
        </div>


        <!-- Supervisor Info -->
        <div class="mb-3">
            <p><strong>Nama Penyelia Utama:</strong> <?= $student->T01_SV_NAME ?></p>
            <p><strong>Emel Penyelia Utama:</strong> <?= $student->T01_SV_EMAIL ?></p>
        </div>

        <!-- Thesis Title -->
        <div class="mb-3">
            <p><strong>Tajuk Dokumen:</strong> <?= $student->T01_THESIS_NAME ?></p>
        </div>

    <br>
    <br>

        <!-- Document Types (Now Checkboxes) -->
        <div class="mb-3">
            <label class="form-label"><strong>Dokumen yang ingin disahkan:</strong></label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="document_type[]" id="disertasi" value="Disertasi">
                <label class="form-check-label" for="disertasi">Disertasi</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="document_type[]" id="viva" value="Tesis untuk viva">
                <label class="form-check-label" for="viva">Tesis untuk viva</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="document_type[]" id="pengijazahan" value="Tesis yang telah dibetulkan untuk Pengijazahan">
                <label class="form-check-label" for="pengijazahan">Tesis yang telah dibetulkan untuk Pengijazahan</label>
            </div>
        </div>

        <!-- Google Drive Link Input -->
        <div class="mb-3">
            <label for="google_drive_link" class="form-label"><strong>Link Google Drive:</strong></label>
            <input name="google_drive_link" type="url" class="form-control" id="google_drive_link" placeholder="Paste your Google Drive link here">
            <div class="mt-2">
                <a id="google_drive_anchor" href="#" target="_blank" style="display:none; color: blue; text-decoration: underline;">Open File</a>
            </div>
        </div>

         <!-- Buttons -->
         <div class="d-flex justify-content-between">
         <a href="/myprojek/manage/pengesahanIndeks/confirm_peng_indeks" class="btn btn-secondary">Seterusnya</a>
            <a href="/myprojek/manage/pengesahanIndeks/kemaskini_peng_indeks" class="btn btn-secondary">Kemaskini</a>
        </div>

    </form>

    <!-- Footer -->
    <footer class="mt-4 text-center">
        <p class="text-muted">All rights reserved by Universiti Malaysia Terengganu.</p>
    </footer>
</div>

<script>
    document.getElementById("google_drive_link").addEventListener("input", function () {
        const link = this.value;
        const anchor = document.getElementById("google_drive_anchor");

        if (link.startsWith("https://drive.google.com/")) {
            anchor.href = link;
            anchor.style.display = "inline";
        } else {
            anchor.style.display = "none";
        }
    });
</script>

</body>
</html>
