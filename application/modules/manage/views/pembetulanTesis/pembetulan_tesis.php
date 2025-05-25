<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengesahan Pembetulan Tesis</title>
   
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center form-title">Pengesahan Pembetulan Tesis</h2>

        <form>

            <!-- Student Information (Display only) -->
            <div class="mb-3">
                <p><strong>Nama:</strong> <?= $student->T01_STUDENT_NAME ?></p>
            </div>

            <div class="mb-3">
                <p><strong>No Matrik:</strong> <?= $student->T01_STUDENT_MATRICNUM ?></p>
            </div>

            <div class="mb-3">
                <p><strong>Semester:</strong> <?= $student->T01_SEMESTER ?></p>
            </div>

            <div class="mb-3">
                <p><strong>Program:</strong> <?= $student->T01_PROGRAMME ?></p>
            </div>

            <!-- Mode of Study (Checkboxes remain for selection) -->
            <div class="mb-3">
                <label class="form-label"><strong>Mod Pengajian:</strong></label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="sepenuh" name="study_mode" value="Sepenuh Masa">
                    <label class="form-check-label" for="sepenuh">Sepenuh Masa</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="separuh" name="study_mode" value="Separuh Masa">
                    <label class="form-check-label" for="separuh">Separuh Masa</label>
                </div>
            </div>

            <!-- Input fields for Program Structure & Field of Study -->
            <div class="mb-3">
                <label for="program_structure" class="form-label"><strong>Struktur Program:</strong></label>
                <input type="text" id="program_structure" name="program_structure" class="form-control">
            </div>

            <div class="mb-3">
                <label for="field_of_study" class="form-label"><strong>Bidang Pengajian:</strong></label>
                <input type="text" id="field_of_study" name="field_of_study" class="form-control">
            </div>

            <!-- Thesis Title (Display only) -->
            <div class="mb-3">
                <p><strong>Tajuk Tesis:</strong> <?= $student->T01_THESIS_NAME ?></p>
            </div>

            <!-- Buttons -->
            <div class="btn-container d-flex gap-2">
                <button type="button" class="btn btn-secondary">Kemaskini</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>

        <!-- Footer -->
        <footer class="mt-4 text-center">
            <p class="text-muted">All rights reserved by Universiti Malaysia Terengganu.</p>
        </footer>
    </div>
</body>
</html>
