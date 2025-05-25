<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengesahan Indeks Kesamaan Tesis</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h4 class="text-center mb-4">Pengesahan Indeks Kesamaan Tesis</h4>
        
        <form method="POST" action="<?php echo isset($indeks['T01_STUDENT_ID']) ? module_url('pengesahanIndeks/save_update/' . $indeks['T01_STUDENT_ID']) : '#'; ?>">

            <!-- Student Details -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="name" class="form-label">Nama:</label>
                    <input type="text" name="name" class="form-control" id="name" 
                           value="<?= htmlspecialchars($indeks['T01_STUDENT_NAME'] ?? '') ?>" readonly>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Alamat Emel Pelajar:</label>
                    <input type="email" name="email" class="form-control" id="email" 
                           value="<?= htmlspecialchars($indeks['T01_STUDENT_EMAIL'] ?? '') ?>" readonly>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="matric" class="form-label">No Matrik:</label>
                    <input type="text" name="matric" class="form-control" id="matric" 
                           value="<?= htmlspecialchars($indeks['T01_STUDENT_MATRICNUM'] ?? '') ?>" readonly>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Program:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="program" id="sarjana" value="sarjana" 
                               <?= isset($indeks['T01_PROGRAMME']) && $indeks['T01_PROGRAMME'] == 'sarjana' ? 'checked' : '' ?> disabled>
                        <label class="form-check-label" for="sarjana">Sarjana</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="program" id="phd" value="phd" 
                               <?= isset($indeks['T01_PROGRAMME']) && $indeks['T01_PROGRAMME'] == 'phd' ? 'checked' : '' ?> disabled>
                        <label class="form-check-label" for="phd">Doktor Falsafah</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="semester" class="form-label">Semester:</label>
                    <input type="text" name="semester" class="form-control" id="semester" 
                           value="<?= htmlspecialchars($indeks['T01_SEMESTER'] ?? '') ?>" readonly>
                </div>
            </div>

            <!-- Document Type -->
            <div class="row mb-3">
                <div class="col-md-12">
                    <label class="form-label">Dokumen yang ingin disahkan:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="document_type[]" id="disertasi" value="disertasi" 
                               <?= isset($indeks['T01_DOC_TYPE']) && strpos($indeks['T01_DOC_TYPE'], 'disertasi') !== false ? 'checked' : '' ?>>
                        <label class="form-check-label" for="disertasi">Disertasi</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="document_type[]" id="viva" value="viva" 
                               <?= isset($indeks['T01_DOC_TYPE']) && strpos($indeks['T01_DOC_TYPE'], 'viva') !== false ? 'checked' : '' ?>>
                        <label class="form-check-label" for="viva">Tesis untuk viva</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="document_type[]" id="pengijazahan" value="pengijazahan" 
                               <?= isset($indeks['T01_DOC_TYPE']) && strpos($indeks['T01_DOC_TYPE'], 'pengijazahan') !== false ? 'checked' : '' ?>>
                        <label class="form-check-label" for="pengijazahan">Tesis yang telah dibetulkan untuk Pengijazahan</label>
                    </div>
                </div>
            </div>

            <!-- Supervisor Details -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="supervisor" class="form-label">Nama Penyelia Utama:</label>
                    <input type="text" name="sv_name" class="form-control" id="supervisor" 
                           value="<?= htmlspecialchars($indeks['T01_SV_NAME'] ?? '') ?>" readonly>
                </div>
                <div class="col-md-6">
                    <label for="sv_email" class="form-label">Emel Penyelia Utama:</label>
                    <input type="email" name="sv_email" class="form-control" id="sv_email" 
                           value="<?= htmlspecialchars($indeks['T01_SV_EMAIL'] ?? '') ?>" readonly>
                </div>
            </div>

            <!-- Thesis Title -->
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="thesis_name" class="form-label">Tajuk Dokumen:</label>
                    <input type="text" name="thesis_name" class="form-control" id="thesis_name" 
                           value="<?= htmlspecialchars($indeks['T01_THESIS_NAME'] ?? '') ?>" readonly>
                </div>
            </div>

            <!-- Buttons -->
            <div class="d-flex justify-content-between">
                <button type="submit" name="action" value="kemaskini" class="btn btn-secondary">Kemaskini</button>
                <button type="submit" name="action" value="seterusnya" class="btn btn-success">Seterusnya</button>
            </div>
        </form>

        <!-- Footer -->
        <footer class="mt-4 text-center">
            <p class="text-muted">All rights reserved by Universiti Malaysia Terengganu.</p>
        </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
