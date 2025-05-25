<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengesahan Indeks Kesamaan Tesis</title>
  
    
</head>
<body>
  

    <!-- Content -->
    <div class="content">
        <div class="header">
            <h4>Pengesahan Indeks Kesamaan Tesis</h4>
        </div>
        <form class="mt-4">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="name" class="form-label">Nama:</label>
                    <input type="text" class="form-control" id="name" value="-" readonly>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Alamat Emel Pelajar:</label>
                    <input type="email" class="form-control" id="email" value="-" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="matric" class="form-label">No Matrik:</label>
                    <input type="text" class="form-control" id="matric">
                </div>
                <div class="col-md-4">
                    <label for="program" class="form-label">Program:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="program" id="sarjana" value="sarjana">
                        <label class="form-check-label" for="sarjana">Sarjana</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="program" id="phd" value="phd">
                        <label class="form-check-label" for="phd">Doktor Falsafah</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="semester" class="form-label">Semester:</label>
                    <input type="text" class="form-control" id="semester">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label class="form-label">Dokumen yang ingin disahkan:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="disertasi" value="disertasi">
                        <label class="form-check-label" for="disertasi">Disertasi</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="viva" value="viva">
                        <label class="form-check-label" for="viva">Tesis untuk viva</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="pengijazahan" value="pengijazahan">
                        <label class="form-check-label" for="pengijazahan">Tesis yang telah dibetulkan untuk Pengijazahan</label>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="supervisor" class="form-label">Nama Penyelia Utama:</label>
                    <input type="text" class="form-control" id="supervisor">
                </div>
                <div class="col-md-6">
                    <label for="supervisorEmail" class="form-label">Emel Penyelia Utama:</label>
                    <input type="email" class="form-control" id="supervisorEmail">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="documentTitle" class="form-label">Tajuk Dokumen:</label>
                    <input type="text" class="form-control" id="documentTitle">
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-secondary">Kemaskini</button>
                <button type="submit" class="btn btn-success">Seterusnya</button>
            </div>
        </form>
        <footer class="mt-4 text-center">
            <p class="text-muted">All right reserved by Universiti Malaysia Terengganu.</p>
        </footer>
    </div>
</body>
</html>
