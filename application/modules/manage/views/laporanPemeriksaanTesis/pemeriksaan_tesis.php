<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pemeriksaan Tesis</title>
   
</head>
<body>
<div class="container my-5">
    <h4 class="text-center mb-4">Laporan Pemeriksaan Tesis</h4>

    <form action="/pemeriksaan_tesis/save" method="post">

        <!-- 1. Title -->
        <div class="mb-3">
            <label class="form-label fw-bold">1. Tajuk Tesis (Thesis title)</label>
            <p>Nyatakan kesesuaian tajuk tesis dan cadangkan tajuk alternatif jika perlu.</p>
            <p><em>Please comment on the suitability of the suggested title of thesis whether it reflects the actual content. Kindly suggest alternative title, if necessary.</em></p>
            <textarea class="form-control" name="title_comment" rows="3" required></textarea>
        </div>

        <!-- 2. Research Problem -->
        <div class="mb-3">
            <label class="form-label fw-bold">2. Permasalahan Kajian (Research problem)</label>
            <p>Nyatakan sama ada permasalahan kajian dibincangkan dengan jelas.</p>
            <p><em>Please state whether the research problem(s) is discussed clearly.</em></p>
            <textarea class="form-control" name="research_problem" rows="3" required></textarea>
        </div>

        <!-- 3. Scope and Relevance -->
        <div class="mb-3">
            <label class="form-label fw-bold">3. Skop dan Kesesuaian (Scope and relevance)</label>
            <p>Komen sama ada skop dan kepentingan kajian dinyatakan dengan tepat.</p>
            <p><em>Please comment whether the scope and relevance of the research are indicated precisely.</em></p>
            <textarea class="form-control" name="scope_relevance" rows="3" required></textarea>
        </div>

        <!-- 4. Literature Review -->
        <div class="mb-3">
            <label class="form-label fw-bold">4. Sorotan Literatur (Literature review)</label>
            <p>Nyatakan sama ada sorotan literatur dipilih dan disusun dengan teliti.</p>
            <p><em>Please state whether the literature is carefully selected and arranged.</em></p>
            <textarea class="form-control" name="literature_review" rows="3" required></textarea>
        </div>

        <!-- 5. Methodology -->
        <div class="mb-3">
            <label class="form-label fw-bold">5. Pengkaedahan (Methodology)</label>
            <p>Berikan pertimbangan terhadap kaedah kajian dan beban kerja kajian seperti kerja lapangan, makmal, temu bual dan kajian perpustakaan serta kuantiti data yang diperoleh.</p>
            <p><em>Consideration should be given to the technique of research adopted and the extent of work involved in terms of fieldwork, laboratory work, interviews, library research, etc., and the evidence of the amount of data collected.</em></p>
            <textarea class="form-control" name="methodology" rows="3" required></textarea>
        </div>

        <!-- 6. Analysis -->
        <div class="mb-3">
            <label class="form-label fw-bold">6. Analisis dan Tafsiran (Analysis)</label>
            <p>Nilai sumbangan asli, kebolehan menganalisis dan penyampaian maklumat oleh pelajar.</p>
            <p><em>The original contribution of the candidate should be proved in the chapters devoted to analysis and conclusions drawn from the research work...</em></p>
            <textarea class="form-control" name="analysis" rows="3" required></textarea>
        </div>

        <!-- 7. Presentation -->
        <div class="mb-3">
            <label class="form-label fw-bold">7. Penyampaian (Presentation)</label>
            <p>Nilai penyusunan tesis termasuk format, gaya dan ketepatan bahan yang dikemukakan.</p>
            <p><em>Consideration should be given to the organization of the thesis including the format presentation of tables, diagrams, charts, footnotes, bibliography and appendices.</em></p>
            <textarea class="form-control" name="presentation" rows="3" required></textarea>
        </div>

        <!-- 8. Accomplishment -->
        <div class="mb-3">
            <label class="form-label fw-bold">8. Pencapaian atau Kebaikan (Accomplishment and Advantages)</label>
            <p>Nyatakan sejauh mana objektif kajian telah dicapai.</p>
            <p><em>The extent to which the objectives of research have been achieved should be considered.</em></p>
            <textarea class="form-control" name="accomplishment" rows="3" required></textarea>
        </div>

        <!-- 9. Demerits -->
        <div class="mb-3">
            <label class="form-label fw-bold">9. Kelemahan (Demerits)</label>
            <p>Nyatakan kelemahan umum dalam kajian ini.</p>
            <p><em>General weaknesses of the subject are to be considered under this heading.</em></p>
            <textarea class="form-control" name="demerits" rows="3" required></textarea>
        </div>

        <!-- 10. Recommendation -->
        <div class="mb-3">
            <label class="form-label fw-bold">10. Cadangan (Recommendation)</label>
            <p>Nyatakan cadangan berdasarkan penilaian anda terhadap tesis ini.</p>
            <p><em>Please indicate whether the thesis meets the required standards and what actions are recommended.</em></p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="recommendation" value="minor" required>
                <label class="form-check-label">Terima dengan Pembetulan Minor</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="recommendation" value="major">
                <label class="form-check-label">Pembetulan Major</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="recommendation" value="reject">
                <label class="form-check-label">Gagal / Demerit</label>
            </div>
        </div>

        <!-- 11. Best Thesis -->
        <div class="mb-3">
            <label class="form-label fw-bold">11. Anugerah Tesis Terbaik (Best thesis)</label>
            <p>Adakah tesis ini mencapai kualiti cemerlang untuk layak menerima anugerah tesis terbaik?</p>
            <p><em>Based on your experience, does the thesis merit the award of best thesis?</em></p>
            <textarea class="form-control" name="best_thesis" rows="3" required></textarea>
        </div>

        <!-- 12. Publication -->
        <div class="mb-3">
            <label class="form-label fw-bold">12. Kesesuaian untuk Penerbitan (Publication)</label>
            <p>Sila nyatakan jika tesis ini sesuai untuk diterbitkan dan jika ada cadangan perubahan sebelum diterbitkan.</p>
            <p><em>Examiner may add remarks regarding changes needed before the thesis is suitable for publication.</em></p>
            <textarea class="form-control" name="publication" rows="3" required></textarea>
        </div>

        <!-- 13. Verification -->
        <div class="mb-3">
            <label class="form-label fw-bold">13. Perakuan Pemeriksa (Verification)</label>
            <p>i. Saya mengesyorkan bahawa pelajar ini layak dianugerahkan:</p>
            <p><em>I recommend that this student be awarded the following degree:</em></p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="degree_recommendation" value="Master" required>
                <label class="form-check-label">Ijazah Sarjana (Master's Degree)</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="degree_recommendation" value="PhD" required>
                <label class="form-check-label">Ijazah Doktor Falsafah (Doctor of Philosophy)</label>
            </div>

            <br>
            <p>ii. Tajuk tesis yang dicadangkan adalah:</p>
            <p><em>Suggested title of thesis:</em></p>
            <textarea class="form-control" name="suggested_title" rows="3" required></textarea>
        </div>

        <!-- Submit Buttons -->
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">Hantar</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>

    </form>
</div>
</body>
</html>
