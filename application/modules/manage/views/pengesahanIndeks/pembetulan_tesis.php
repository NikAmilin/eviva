<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengesahan Pembetulan Tesis</title>
    
   
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center form-title">Pengesahan Pembetulan Tesis</h2>

        <form>
            <!-- Student Information -->
            <div class="mb-3">
                <label for="name" class="form-label">Nama:</label>
                <input type="text" id="name" name="name" class="form-control" value="-" readonly>
            </div>

            <div class="mb-3">
                <label for="matric" class="form-label">No Matrik:</label>
                <input type="text" id="matric" name="matric" class="form-control">
            </div>

            <div class="mb-3">
                <label for="semester" class="form-label">Semester:</label>
                <input type="text" id="semester" name="semester" class="form-control">
            </div>

            <!-- Program Details -->
            <div class="mb-3">
                <label class="form-label">Program:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="sarjana" name="program" value="Sarjana">
                    <label class="form-check-label" for="sarjana">Sarjana</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="phd" name="program" value="Doktor Falsafah">
                    <label class="form-check-label" for="phd">Doktor Falsafah</label>
                </div>
            </div>

            <!-- Mode of Study -->
            <div class="mb-3">
                <label class="form-label">Mod Pengajian:</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="sepenuh" name="study_mode" value="Sepenuh Masa">
                    <label class="form-check-label" for="sepenuh">Sepenuh Masa</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="separuh" name="study_mode" value="Separuh Masa">
                    <label class="form-check-label" for="separuh">Separuh Masa</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="program_structure" class="form-label">Struktur Program:</label>
                <input type="text" id="program_structure" name="program_structure" class="form-control">
            </div>

            <div class="mb-3">
                <label for="field_of_study" class="form-label">Bidang Pengajian:</label>
                <input type="text" id="field_of_study" name="field_of_study" class="form-control">
            </div>

            <div class="mb-3">
                <label for="thesis_title" class="form-label">Tajuk Tesis:</label>
                <input type="text" id="thesis_title" name="thesis_title" class="form-control">
            </div>

            <!-- Buttons -->
            <div class="btn-container">
                <button type="button" class="btn btn-secondary">Kemaskini</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>

        <!-- Footer -->
        <footer>
            <p>All rights reserved by Universiti Malaysia Terengganu.</p>
        </footer>
    </div>

</body>
</html>
