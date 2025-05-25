<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengesahan Indeks Kesamaan Tesis</title>
</head>
<body>
    <div class="content">
        <div class="header">
            <h4>Pengesahan Indeks Kesamaan Tesis</h4>
        </div>
        
        <!-- Form for user confirmation -->
        <form action="/myprojek/manage/pengesahanIndeks/save_peng_indeks" method="post">
            <div class="mb-4">
                <p>I hereby declare that:</p>
                <ol>
                    <li>I have read, aware and understand the provision of Rule 6 - Prohibition against plagiarism of Universiti Malaysia Terengganu (Discipline of Student) Rule 2009.</li>
                    <li>The submitted document is original, and no idea, writing, data, or intervention written and presented to UMT has been fabricated from other people.</li>
                    <li>The submitted document is solely my own, and no sentences, equations, diagrams, tables, paragraphs, or sections have been copied verbatim from other people unless properly cited.</li>
                    <li>There is no falsification by manipulating research materials, equipment, or processes or by changing or omitting data or results such that the research is not accurately recorded in the research record of UMT.</li>
                </ol>
            </div>

            <!-- Agreement checkbox -->
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="agree" value="1" id="agree" required>
                <label class="form-check-label" for="agree">Agree</label>
            </div>

            <!-- Navigation buttons -->
            <div class="d-flex justify-content-between">
                <a href="/myprojek/manage/pengesahanIndeks/create_student" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>

        <!-- Footer -->
        <footer class="text-center mt-4">
            <p class="text-muted">All rights reserved by Universiti Malaysia Terengganu.</p>
        </footer>
    </div>
</body>
</html>

